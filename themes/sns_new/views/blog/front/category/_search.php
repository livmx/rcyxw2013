<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>
<div class="col">
    <div class="cell panel">
        <div class="body">
            <div class="cell">
                <div class="col" >
                    <div class="wide form cell">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array(
	'class'=>'',
	),
)); ?>

                                                    
                            <div class="col">
                                <div class="col size1of4">
                                    <?php echo $form->label($model,'id'); ?>
                                </div>
                                <div class="col sizefill">
                                    <?php echo $form->textField($model,'id',array('size'=>11,'maxlength'=>11)); ?>
                                </div>
                            </div>

                                                    
                            <div class="col">
                                <div class="col size1of4">
                                    <?php echo $form->label($model,'uid'); ?>
                                </div>
                                <div class="col sizefill">
                                    <?php echo $form->textField($model,'uid'); ?>
                                </div>
                            </div>

                                                    
                            <div class="col">
                                <div class="col size1of4">
                                    <?php echo $form->label($model,'pid'); ?>
                                </div>
                                <div class="col sizefill">
                                    <?php echo $form->textField($model,'pid',array('size'=>11,'maxlength'=>11)); ?>
                                </div>
                            </div>

                                                    
                            <div class="col">
                                <div class="col size1of4">
                                    <?php echo $form->label($model,'name'); ?>
                                </div>
                                <div class="col sizefill">
                                    <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
                                </div>
                            </div>

                                                    
                            <div class="col">
                                <div class="col size1of4">
                                    <?php echo $form->label($model,'alias'); ?>
                                </div>
                                <div class="col sizefill">
                                    <?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>255)); ?>
                                </div>
                            </div>

                                                    
                            <div class="col">
                                <div class="col size1of4">
                                    <?php echo $form->label($model,'position'); ?>
                                </div>
                                <div class="col sizefill">
                                    <?php echo $form->textField($model,'position',array('size'=>11,'maxlength'=>11)); ?>
                                </div>
                            </div>

                        
                        <div class="col ">
                            <div class="col size1of4"></div>
                            <div class="col sizefill">
                                <div class="cell">
                                    <?php echo CHtml::submitButton('Search',array(
                                       'class'=>'button',
                                    )); ?>
                                </div>
                            </div>

                        </div>

                        <?php $this->endWidget(); ?>

                    </div><!-- search-form -->
                </div>
            </div>
        </div>
    </div>
</div>

