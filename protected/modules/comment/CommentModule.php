<?php


class CommentModule extends  CWebModule
{
    public $notifier = 'application\modules\comment\components\Notifier';
    public $defaultCommentStatus;
    public $autoApprove = true;
    public $notify = true;
    public $email;
    public $import = array();
    public $showCaptcha = 1;
    public $minCaptchaLength = 3;
    public $maxCaptchaLength = 6;
    public $rssCount = 10;
    public $antispamInterval = 10;
    public $allowedTags;


    public function init()
    {
        // import the module-level models and components
        $this->setImport(array(
            'comment.models.*',
            'comment.components.*',
        ));
        if (Yii::app() instanceof CWebApplication) {

            // Raise onModuleCreate event.
            Yii::app()->onModuleCreate(new CEvent($this));
        }
    }


    public function beforeControllerAction($controller, $action)
    {
        if(parent::beforeControllerAction($controller, $action))
        {
            // this method is called before any module controller action is performed
            // you may place customized code here
            return true;
        }
        else
            return false;
    }
}