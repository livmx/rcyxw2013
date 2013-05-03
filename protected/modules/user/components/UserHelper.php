<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yiqing
 * Date: 12-8-27
 * Time: 上午11:40
 * To change this template use File | Settings | File Templates.
 */
class UserHelper
{
   //---------------------------------------------------------------\\
    static public function spaceVisitorRecord($uid){
        echo CHtml::image(Yii::app()->createUrl('/user/user/doSpaceVisitorRecord',array('u'=>$uid)),'invisible',array(
            'style'=>'display:none'
        ));
    }


  //----------------------------------------------------------------//
    /**
     * @static
     * @param int $uid
     * @return string
     */
    static public function getUserSpaceUrl($uid = 0)
    {
        return Yii::app()->createUrl('/user/space', array('u' => $uid));
    }

    /**
     * @return string
     * 返回用户中心的URL地址！
     */
    static public function getUserCenterUrl(){
        return Yii::app()->createUrl('/user/home');
    }

    /**
     * @return string
     * 共享布局的路径引用 跟url的创建 都需要从项目根部算起！
     * 因为布局是跨模块的所以单纯使用布局名称 会导致在不同的模块下
     * 从不同的模块path算起的！
     * 多module共享的布局 一定要用别名或者用“//” 算起
     * 还有一种情况干脆避免模块共享布局 每个module的布局最多继承main布局但是不要使用其他
     * module下的布局 本打算让内容module共享user模块下的userCenter跟userSpace布局
     * 但布局路径解析由于使用了WebApplicationEndBehavior扩展所以布局解析可能出错！
     *  YiiUtil::getAliasOfPath(Yii::app()->getTheme()->getViewPath(),'webroot').'.user.front.layouts.userCenter';
     * 上面的方式是可行的 但感觉有点丑陋！
     */
    static public function getUserCenterLayout(){
        return 'userCenter';
        //return  YiiUtil::getAliasOfPath(Yii::app()->getTheme()->getViewPath(),'webroot').'.user.front.layouts.userCenter';

        //return 'user.layouts.userCenter';
        /*
        if(isset(Yii::app()->endName)){
             $endName = Yii::app()->endName ;
            return "user.{$endName}.layouts.userCenter";
        }else{
            return 'user.layouts.userCenter';
        }*/

    }

    /**
     * @static
     * @return string
     */
    static public function getLoginUrl()
    {
        return current(Yii::app()->getModule('user')->loginUrl);
    }

    /**
     * @var array
     */
    static private $_cache = array();

    /**
     * @static
     * @return bool
     */
    static public function getIsOwnSpace()
    {
        if (!user()->getIsGuest()) {
            $loginUserId = user()->getId();
            $spaceOwnerId = self::getSpaceOwnerId();

            return $loginUserId == $spaceOwnerId;
        } else {
            return false;
        }
    }

    /**
     * @static
     * @return int|mixed
     */
    static public function getVisitorId()
    {
        if (user()->getIsGuest()) {
            return 0;
        } else {
            return user()->getId();
        }
    }

    /**
     * @static
     * @return bool
     */
    static public function getIsLoginUser()
    {
        return !user()->getIsGuest();
    }

    static public function renderUserIcon($user)
    {

        $picId = rand(1, 5);
        $userPhotoUrl = empty($user->profile->photo) ? PublicAssets::instance()->url("images/user/avatars/5.jpg") : bu($user->profile->photo);
        $userImage = <<<U_FACE
      <div align="center" style="width:120px;height:120px;float:left;overflow:hidden;">
       <img src="{$userPhotoUrl}"
            alt=""
            class=""
            />
      </div>
U_FACE;
        echo $userImage;
    }

    /**
     * @static
     * @param int $u
     * @return UserProfile
     */
    static public function getUserPublicProfile($u = 0)
    {
        if ($u !== 0) {
            $userId = isset($_GET['u']) ? $_GET['u'] : user()->getId();
        } else {
            $userId = $u;
        }

        $cacheKey = __METHOD__ . '#' . $userId;
        if (!isset(self::$_cache[$cacheKey])) {
            $controller = Yii::app()->controller;
            self::$_cache[$cacheKey] = $controller->widget('user.widgets.profile.UserProfile', array(
                'user' => $userId, //we assume when access some one 's space we will always pass the param "u" to the $_GET
                'template' => '',
            ));
        }
        return self::$_cache[$cacheKey];
    }

    /**
     * @static
     * @return UserCenterProfile
     *
     */
    static public function getUserCenterProfile()
    {
        $cacheKey = __METHOD__;
        if (!isset(self::$_cache[$cacheKey])) {
            $controller = Yii::app()->controller;
            self::$_cache[$cacheKey] = $controller->widget('user.widgets.usercenter.UserCenterProfile', array(
                'template' => '',
            ));
        }
        return self::$_cache[$cacheKey];
    }

    /**
     * @static
     * @param int $user_a
     * @param int $approved
     * @return array
     */
    public static function getFriends($user_a = 0, $approved = 1)
    {
        $sql = "SELECT r.id as id , t.name as type_name, t.plural_name as type_plural_name,
                ua.username as user_a_name, ub.username as  user_b_name
                FROM
                relationship r,
                relationship_type t,
                user ua, user ub
                 WHERE t.id = r.type AND  ua.id = r.user_a
                  AND ub.id = r.user_b
                  AND  r.accepted = {$approved} ";
        $sql .= " AND r.user_a={$user_a} ";
        $cmd = Yii::app()->db->createCommand($sql);
        return $cmd->queryAll();

    }

    /**
     * @static
     * @param int $user_a
     * @param int $approved
     * @return array
     */
    public static function getFriendIds($user_a = 0, $approved = 1)
    {
        $sql = "SELECT  ub.id
                FROM
                relationship r,
                relationship_type t,
                user ua, user ub
                 WHERE t.id = r.type AND  ua.id = r.user_a
                  AND ub.id = r.user_b
                  AND  r.accepted = {$approved} ";
        $sql .= " AND r.user_a={$user_a} ";

        $cmd = Yii::app()->db->createCommand($sql);
        return $cmd->queryColumn();

    }

    /**
     * check if  userB is friend of userA
     * @static
     * @param int $userA
     * @param int $userB
     * @return bool
     */
    public static function isFriend($userA,$userB){

        $sql = "SELECT 2
                FROM
                relationship r,
                relationship_type t,
                user ua, user ub
                 WHERE t.id = r.type AND  ua.id = r.user_a
                  AND ub.id = r.user_b
                  AND  r.accepted = 1 ";
        $sql .= " AND r.user_a=:userA ";
        $sql .= " AND r.user_b=:userB ";

        $cmd = Yii::app()->db->createCommand($sql);
        return $cmd->queryScalar(array(':userA'=>$userA,':userB'=>$userB)) !== false;
    }

    //----------------------------------------------------------------\\

    /**
     * @var int
     */
    static  protected $spaceOwnerId ;

    /**
     * @static
     * @return mixed
     * @throws CException
     * 获取当前被访问空间的用户id
     */
    static public function getSpaceOwnerId()
    {
        return self::$spaceOwnerId ;
        /*
        if (!isset($_GET['u'])) {
            if (user()->getIsGuest()) {
                throw new CException('must pass the u  param in  $_GET variable ');
            } else {
                return $_GET['u'] = user()->getId();
            }

        } else {
            return $_GET['u'];
        }*/
    }

    /**
     * @param int $userId
     */
    static public function setSpaceOwnerId($userId = 0){
        self::$spaceOwnerId = $userId ;
    }

    /**
     * @var User
     */
    static protected $spaceOwnerModel ;

    /**
     * @param User $userModel
     */
    static public function setSpaceOwnerModel(User $userModel){
            self::$spaceOwnerModel = $userModel ;
    }

    /**
     * @return User
     */
    static public function getSpaceOwnerModel(){
        return self::$spaceOwnerModel ;
    }

//----------------------------------------------------------------\\


    /**
     * @return User
     */
    static public function getLoginUserModel(){
        return UserModule::user(user()->getId());
    }

}
