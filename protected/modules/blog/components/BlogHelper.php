<?php
/**
 *  
 * User: yiqing
 * Date: 13-5-8
 * Time: 上午11:14
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * -------------------------------------------------------
 */

class BlogHelper {

    /**
     * @return string
     */
    static public function getCreateBlogUrl(){

        return Yii::app()->createUrl('/blog/my/create');
    }

    static  protected $statusTypeId ;

    /**
     * @return mixed
     */
    static public function getStatusTypeId(){
        /*
        Yii::app()->getModule('status');
        return StatusManager::getStatusTypeId('blog_create');
        */
        if(!isset(self::$statusTypeId)){
            $statusTypeArr = require(Yii::getPathOfAlias('blog.data.statusWall'). DIRECTORY_SEPARATOR .'statusType.php');
            self::$statusTypeId = $statusTypeArr['type_id'];
        }
        return self::$statusTypeId;

    }
}