<?php

class CommentFormWidget extends YsWidget
{
    public $model;
    public $modelId;
    public $redirectTo;
    public $view = 'commentForm';

    /**
     * ajax提交后动态刷新listView
     * 对于增删两种操作也可以不刷新listView 而局部用js添加或者删除掉
     * @var string
     */
    public $commentListViewId ;

    public function init()
    {
        /*
        Yii::app()->clientScript->registerScriptFile(
            Yii::app()->assetManager->publish(Yii::app()->theme->basePath . '/web/js/commentform.js')
        );
        */
        $this->model   = is_object($this->model) ? get_class($this->model) : $this->model;
        $this->modelId = (int) $this->modelId;

        // 此id用来标识listView 用来ajax更新
        // 如果不设此值那么需要使用js动态计算 比如.list-view .comment 等方式！
        if(empty($this->commentListViewId)){
            $this->commentListViewId = "cmt_list_{$this->model}_{$this->modelId}";
        }
    }

    public function run()
    {
        $model = new Comment;

        $module = Yii::app()->getModule('comment');

        $model->setAttributes(array(
            'model'    => $this->model,
            'model_id' => $this->modelId,
        ));

        // 登录用户之间赋值email信息
        $loginUser = user() ;
        if(!$loginUser->getIsGuest()){
            $model->email = $loginUser->email ;
            $model->user_id = $loginUser->getId() ;
            $model->name = $loginUser->username ;
        }

        $this->render($this->view, array(
            'redirectTo' => $this->redirectTo,
            'model'      => $model,
            'module'      => $module,
        ));
    }
}