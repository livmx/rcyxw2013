<?php

/**
 * 该类其实可以直接继承自CListView 但也可以内部使用它(主要考虑到需要使用theme特征 原始的CListView 对子view的存放不友好)
 * 一般有组合优于继承的说法
 *
 * 该widget 负责渲染评论列表 或者一个单独的评论内容(ajax 提交后为了提高效率 不是全加载而是只加载一个评论内容)
 *
 * Class CommentsListWidget
 */
class CommentsListWidget extends YsWidget
{
    public $model;
    public $modelId;
    public $label;
    /**
     * used to render single comment
     * @var null|Comment
     */
    public $comment = null;
    public $comments;
    public $status;
    public $view = 'commentsList';

    /**
     * @var string
     */
    public $id;

    /**
     * who can delete a comment item
     * - the comment owner
     * - the comment object(target) owner
     *
     * @var bool
     */
    public $canDelete = false;

    /**
     * only the object(target model) owner can approve a comment
     * @var bool
     */
    public $canApprove = false ;

    /**
     * determined by canDelete and canApprove attribute
     * @var bool
     */
    protected $adminMode = false ;

    /**
     * will pass to the underline CListView
     * @var string
     */
    public $ajaxUrl;
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
            if ((empty($this->model) && empty($this->modelId))) {
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
        // 此id用来标识listView 用来ajax更新
        // 如果不设此值那么需要使用js动态计算 比如.list-view .comment 等方式！
        if (empty($this->id)) {
            $this->id = "cmt_list_{$this->model}_{$this->modelId}";
        }

        $this->adminMode = $this->canDelete || $this->canApprove ;
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
            $dataProvider = new CActiveDataProvider('Comment', array(
                'criteria' => $criteria,
            ));

            $this->render(
                $this->view,
                array(
                    'dataProvider' => $dataProvider,
                )
            );
        } else {
            // 渲染单独的一个评论
            $this->render(
                '_view', // 也可以暴露为变量 可配置的？
                array(
                    'data' => $this->comment,
                )
            );
        }
    }
}