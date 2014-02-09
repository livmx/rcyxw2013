<?php

/**
 * 该类其实可以直接继承自CListView 但也可以内部使用它(主要考虑到需要使用theme特征 原始的CListView 对子view的存放不友好)
 * 一般有组合优于继承的说法
 *
 * Class CommentsListWidget
 */
class CommentsListWidget extends YsWidget
{
    public $model;
    public $modelId;
    public $label;
    public $comment = null;
    public $comments;
    public $status;
    public $view = 'commentsList';

    /**
     * Инициализация виджета:
     * @throws CException
     * @return void
     **/
    public function init()
    {
        if ($this->comment === null) {
            /*
            Yii::app()->clientScript->registerScriptFile(
                Yii::app()->assetManager->publish(Yii::app()->theme->basePath . '/web/js/commentlist.js')
            );
            */
            if ((empty($this->model) && empty($this->modelId)) ) {
                throw new CException(
                    Yii::t(
                        'CommentModule.comment',
                        'Please, set "model" and "modelId" for "{widget}" widget!',
                        array(
                            '{widget}' => get_class($this),
                        )
                    )
                );
            }

            $this->model = is_object($this->model) ? get_class($this->model) : $this->model;
            $this->modelId = (int)$this->modelId;
        }

        if (empty($this->label)) {
            $this->label = Yii::t('CommentModule.comment', 'Comments');
        }

        if (empty($this->status)) {
            $this->status = Comment::STATUS_APPROVED;
        }
    }

    /**
     * Запуск виджета:
     *
     * @return void
     **/
    public function run()
    {
        if ($this->comment === null) {

                    $criteria = new CDbCriteria(array(
                            'condition' => 't.model = :model AND t.model_id = :modelId AND t.status = :status',
                            'params' => array(
                                ':model' => $this->model,
                                ':modelId' => $this->modelId,
                                ':status' => $this->status,
                            ),
                            'order' => 't.lft',
                        )
                    );
             $dataProvider = new CActiveDataProvider('Comment',array(
                'criteria'=>$criteria ,
             ));

            $this->render(
                $this->view,
                array(
                    'dataProvider' => $dataProvider,
                )
            );
        } else {

            $this->render(
                $this->view,
                array(
                    'comments' => array(0)
                )
            );
        }
    }
}