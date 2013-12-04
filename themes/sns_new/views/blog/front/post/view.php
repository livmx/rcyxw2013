<?php
$this->breadcrumbs=array(
	$model->title,
);
$this->pageTitle=$model->title;
?>
<?php Layout::beginBlock('top') ?>
<?php YsPageBox::beginPanel() ;?>
 <div class="cell">
     <h2><?php echo CHtml::link(CHtml::encode($model->title), $model->url); ?></h2>

 </div>

<?php YsPageBox::endPanel(); ?>
<?php Layout::endBlock() ;?>


<div class="col">
        col
        <div class="col">
            <div class="col ">

                    <?php YsPageBox::beginPanel() ;?>
                    <div class="cell">

                        <?php $this->renderPartial('_view', array(
                            'data'=>$model,
                        )); ?>

                        <div id="comments" class="cell ">
                            <?php if($model->commentCount>=1): ?>
                                <h3>
                                    <?php echo $model->commentCount>1 ? $model->commentCount . ' comments' : 'One comment'; ?>
                                </h3>

                                <?php $this->renderPartial('_comments',array(
                                    'post'=>$model,
                                    'comments'=>$model->comments,
                                )); ?>
                            <?php endif; ?>

                            <h3>Leave a Comment</h3>

                            <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
                                <div class="flash-success">
                                    <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
                                </div>
                            <?php else: ?>
                                <?php $this->renderPartial('/comment/_form',array(
                                    'model'=>$comment,
                                )); ?>
                            <?php endif; ?>

                        </div><!-- comments -->

                    </div>
                    <?php YsPageBox::endPanel(); ?>
            </div>


        </div>

</div>
<div>
    more like this :
    <?php
    $resultSet = $model->moreLikeThis() ;
    if($resultSet->getTotalHits()>0):?>
    <?php foreach($resultSet as $result): ?>
            <?php echo CHtml::link(CHtml::encode($result->title),
                Post::createPostViewUrl($result->id,$result->title),
                array('target'=>'_blank')); ?>
     <?php endforeach ;?>
    <?php endif;?>
</div>
