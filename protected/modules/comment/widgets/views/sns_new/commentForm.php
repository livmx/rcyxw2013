<?php YsPageBox::beginPanel();
echo YiiUtil::getPathOfClass($model);

?>

<div class="col cell">




<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'comment-form',
    'action' => Yii::app()->createUrl('/comment/comment/add/'),
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    //'focus'=>array($model,''),
    'htmlOptions' => array(
        'class'=>'cell',
    ),
    'clientOptions' => array(
        'validateOnSubmit'=>true,
    ),
)); ?>

<div class="col">
    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
</div>

<?php echo $form->hiddenField($model, 'model'); ?>
<?php echo $form->hiddenField($model, 'model_id'); ?>
<?php echo $form->hiddenField($model, 'parent_id'); ?>
<?php echo CHtml::hiddenField('redirectTo', $redirectTo); ?>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'parent_id'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'parent_id'); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'parent_id'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'user_id'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'user_id'); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'user_id'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'model'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>100)); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'model'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'model_id'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'model_id'); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'model_id'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'url'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>150)); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'url'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'create_time'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'create_time'); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'create_time'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'name'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>150)); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'name'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'email'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'email'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'text'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'text'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'status'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'status'); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'status'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'ip'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'ip',array('size'=>20,'maxlength'=>20)); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'ip'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'level'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'level'); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'level'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'root'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'root'); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'root'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'lft'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'lft'); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'lft'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col width-1of4">
        <div class="cell">
            <?php echo $form->labelEx($model,'rgt'); ?>
        </div>
    </div>
    <div class="col width-2of4">
        <div class="cell">
            <?php echo $form->textField($model,'rgt'); ?>
        </div>
    </div>

    <div class="col width-fill">
        <div class="cell">
            <?php echo $form->error($model,'rgt'); ?>
        </div>
    </div>

</div>
<div class="col">
    <div class="col width-1of4">
    </div>
    <div class="col width-fill">
        <div class="cell">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'button')); ?>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>

</div>

<?php  YsPageBox::endPanel(); ?>

