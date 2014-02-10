<?php
/* @var $this CommentsListWidget */
/* @var $data Comment */
$comment = $data ;

?>

<div class="col">
    <div class="cell panel">
        <div class="body">
            <div class="cell">
                <div class="" style="margin-left: <?php echo(10 * (int)$data->getIndentLevel()); ?>px; "
                     level="<?php echo $data->level; ?>">
                    <div class="cell">
                        <div class="col width-fit">
                            <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
                            <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
                            <br/>

                        </div>
                        <div class="col width-fill">
                            <div class="cell">
                                <b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
                                <?php echo CHtml::encode($data->parent_id); ?>
                                <br/>

                                <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
                                <?php echo CHtml::encode($data->user_id); ?>
                                <br/>

                                <b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
                                <?php echo CHtml::encode($data->model); ?>
                                <br/>

                                <b><?php echo CHtml::encode($data->getAttributeLabel('model_id')); ?>:</b>
                                <?php echo CHtml::encode($data->model_id); ?>
                                <br/>

                                <b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
                                <?php echo CHtml::encode($data->url); ?>
                                <br/>

                                <b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
                                <?php echo CHtml::encode($data->create_time); ?>
                                <br/>

                                <?php /*
    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
    <?php echo CHtml::encode($data->text); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('ip')); ?>:</b>
    <?php echo CHtml::encode($data->ip); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
    <?php echo CHtml::encode($data->level); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('root')); ?>:</b>
    <?php echo CHtml::encode($data->root); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('lft')); ?>:</b>
    <?php echo CHtml::encode($data->lft); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('rgt')); ?>:</b>
    <?php echo CHtml::encode($data->rgt); ?>
    <br />

    */
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php //  echo YiiUtil::getPathOfClass($this);
                if ($this->adminMode): ?>
                    <div class="admin-panel">
                        <?php if ($this->canApprove && $comment->status === null || $comment->status == Comment::STATUS_NEED_CHECK)
                            echo CHtml::link(Yii::t('CommentModule.msg', 'approve'), Yii::app()->urlManager->createUrl(
                                CommentModule::APPROVE_ACTION_ROUTE, array('id' => $comment->primaryKey)
                            ), array('class' => 'approve'));?>

                        <?php if($this->canDelete) echo CHtml::link(Yii::t('CommentModule.msg', 'delete'), Yii::app()->urlManager->createUrl(
                            CommentModule::DELETE_ACTION_ROUTE, array('id' => $comment->primaryKey)
                        ), array('class' => 'delete'));?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>

</div>