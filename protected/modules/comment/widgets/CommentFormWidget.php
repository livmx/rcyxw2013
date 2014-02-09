<?php

class CommentFormWidget extends YsWidget
{
    public $model;
    public $modelId;
    public $redirectTo;
    public $view = 'commentForm';

    public function init()
    {
        /*
        Yii::app()->clientScript->registerScriptFile(
            Yii::app()->assetManager->publish(Yii::app()->theme->basePath . '/web/js/commentform.js')
        );
        */
        $this->model   = is_object($this->model) ? get_class($this->model) : $this->model;
        $this->modelId = (int) $this->modelId;
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