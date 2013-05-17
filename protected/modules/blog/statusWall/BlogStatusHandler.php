<?php
/**
 *  
 * User: yiqing
 * Date: 13-5-17
 * Time: 上午9:51
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * 需要设计接口 然后实现 可以使用widget技巧 渲染复杂数据
 * -------------------------------------------------------
 */

class BlogStatusHandler {


    /**
     * @var User|array
     */
    public $actor ;

    /**
     * @var array
     */
    public $data ;

    /**
     * @return mixed
     */
    public function renderTitle(){

    }

    /**
     * @return mixed
     */
    public function renderBody(){
       // echo __METHOD__;
       // print_r($this->data);

        $data = CJSON::decode($this->data['update']);

        $blogTitleLink = CHtml::link($data['title'],Yii::app()->createUrl('blog/post/view',array('id'=>$data['id'],'title'=>$data['title'])));

        $bodyTpl = <<<BODY
     创建 博文 ; {$blogTitleLink}
BODY;
       echo $bodyTpl;

    }
}