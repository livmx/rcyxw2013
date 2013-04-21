<?php

class UserController extends BaseUserController
{
    /**
     * @var CActiveRecord the currently loaded data model instance.
     */
    private $_model;

    /**
     * @return array action filters
     */
    public function filters()
    {
        return CMap::mergeArray(parent::filters(), array(
            'accessControl', // perform access control for CRUD operations
        ));
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view','space'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform
                'actions' => array('home', ),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     */
    public function actionView()
    {
        $model = $this->loadModel();
        $this->render('view', array(
            'model' => $model,
        ));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        /*
		$dataProvider=new CActiveDataProvider('User', array(
			'criteria'=>array(
		        'condition'=>'status>'.User::STATUS_BANNED,
		    ),
				
			'pagination'=>array(
				'pageSize'=>Yii::app()->controller->module->user_page_size,
			),
		));
        */
        $model = new User('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['User']))
            $model->attributes = $_GET['User'];

        $dataProvider = $model->search();
        $dataProvider->criteria->with = array('profile');
        $dataProvider->getCriteria()->addCondition('status>' . User::STATUS_BANNED);
        $this->render('/user/index', array(
            'dataProvider' => $dataProvider,
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     */
    public function loadModel()
    {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = User::model()->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }


    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the primary key value. Defaults to null, meaning using the 'id' GET variable
     * @throws CHttpException
     * @return \CActiveRecord
     */
    public function loadUser($id = null)
    {
        if ($this->_model === null) {
            if ($id !== null || isset($_GET['id']))
                $this->_model = User::model()->findbyPk($id !== null ? $id : $_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function actionSpace(){
       // $this->forward('/status/status/index');
        //
        $spaceOwnerId = Yii::app()->request->getParam('u',0);
        $spaceOwnerModel = User::model()->with('profile')->findByPk($spaceOwnerId);
        if(empty($spaceOwnerModel)){
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        UserHelper::setSpaceOwnerId($spaceOwnerId);
        UserHelper::setSpaceOwnerModel($spaceOwnerModel);


        //.............................................................\\
        if (!user()->getIsGuest()) {
            $visitorId = user()->getId();
            if ($visitorId != $spaceOwnerId) {
                //访客记录
                $currentTime = time();
                $sql = "
                    INSERT INTO user_space_visitor
                    (space_id,
                     visitor_id,
                     vtime)
                    VALUES (:space_id,
                      :visitor_id,
                         :vtime)
                         ON DUPLICATE KEY UPDATE vtime = :vtime;
                    ";
                $dbCommand = db()->createCommand($sql);
                $dbCommand->bindParam(':space_id',$spaceOwnerId);
                $dbCommand->bindParam(':visitor_id',$visitorId);
                $dbCommand->bindParam(':vtime',$currentTime);

                $dbCommand->execute();
                /**
                 * 貌似用
                 * $dbCommand->execute(array(':key1'=>val1,':key2'=>v2,...));
                 * 更简洁？
                 */
            }
        }
        //.............................................................//
        $this->layout = "userSpace";
        $this->render('space');
    }

    /**
     * dashboard for the current login user
     */
    public function actionHome(){

        $this->forward('/status/status/create');

        // 下面的暂时不用了
        $this->layout = "//layouts/user/user_center";
        $model = User::model()->findByPk(Yii::app()->user->id);

        $this->render('home',array(
            'model'=>$model,
            'profile'=>$model->profile,
        ));
    }
}
