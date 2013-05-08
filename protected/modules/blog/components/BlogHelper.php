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
}