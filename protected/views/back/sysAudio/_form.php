<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'sys-audio-form',
	'enableAjaxValidation'=>false,
	 'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'uid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>120)); ?>

	<?php echo $form->textFieldRow($model,'summary',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'singer',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'uri',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'source_type',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'play_order',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'listens',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cmt_count',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'glean_count',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'file_size',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
