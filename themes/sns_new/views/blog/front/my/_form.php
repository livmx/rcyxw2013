<?php
$this->widget('ext.ueditor.Ueditor',
    array(
        'getId' => 'Post_content',
        'UEDITOR_HOME_URL' => "/",
        'options' => 'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source"]],
                 	wordCount:false,
                 	elementPathEnabled:false,
                 	imagePath:"",
                 	initialContent:"",
                 	',
    ));
?>


<div class="col">
<div class="cell panel">
<div class="body">
<div class="cell">
<div class="col">
<div class="cell">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'post-form',
    'enableAjaxValidation' => false,
)); ?>

<div class="col">
    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
</div>


<div class="col">
    <div class="col size1of5">
        <div class="cell">
            <?php echo $form->labelEx($model, 'title'); ?>
        </div>
    </div>
    <div class="col size2of5">
        <div class="cell">
            <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 128)); ?>
        </div>
    </div>

    <div class="col sizefill">
        <div class="cell">
            <?php echo $form->error($model, 'title'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col size1of5">
        <div class="cell">
            <?php echo $form->labelEx($model, 'category_id'); ?>
        </div>
    </div>
    <div class="col size2of5">
        <div class="cell">
            <?php echo $form->dropDownList($model, 'category_id', Category::CategoryList(user()->getId())); ?>
        </div>
        <a href="<?php echo $this->createUrl('category/create'); ?>" class="create">创建分类</a>
        <?php
        $this->widget('application.extensions.formDialog2.FormDialog2', array(
                'link' => 'a.create',
                'options' => array(
                    'onSuccess' => 'js:function(data, e){alert(data.message);
                       refreshAlbumList();
                }',
                ),
                'dialogOptions' => array(
                    'title'=>'创建相册',
                    'width' => 600,
                    'height' => 470,

                )
            )
        );
        ?>

    </div>

    <div class="col sizefill">
        <div class="cell">
            <?php echo $form->error($model, 'category_id'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col size1of5">
        <div class="cell">
            <?php echo $form->labelEx($model, 'content'); ?>
        </div>
    </div>
    <div class="col size3of5">
        <div class="cell">
            <?php echo $form->textArea($model, 'content', array('rows' => 6, 'cols' => 50)); ?>
        </div>
    </div>

    <div class="col sizefill">
        <div class="cell">
            <?php echo $form->error($model, 'content'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col size1of5">
        <div class="cell">
            <?php echo $form->labelEx($model, 'summary'); ?>
        </div>
    </div>
    <div class="col size2of5">
        <div class="cell">
            <?php echo CHtml::activeTextArea($model, 'summary', array('rows' => 5, 'cols' => 60,)); ?>
        </div>
    </div>

    <div class="col sizefill">
        <div class="cell">
            <?php echo $form->error($model, 'summary'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col size1of5">
        <div class="cell">
            <?php echo $form->labelEx($model, 'tags'); ?>
        </div>
    </div>
    <div class="col size2of5">
        <div class="cell">
            <?php $this->widget('CAutoComplete', array(
                'model' => $model,
                'attribute' => 'tags',
                'url' => array('suggestTags'),
                'multiple' => true,
                'htmlOptions' => array('size' => 50),
            )); ?>
            <p class="hint">Please separate different tags with commas.</p>
        </div>
    </div>

    <div class="col sizefill">
        <div class="cell">
            <?php echo $form->error($model, 'tags'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col size1of5">
        <div class="cell">
            <?php echo $form->labelEx($model, 'status'); ?>
        </div>
    </div>
    <div class="col size2of5">
        <div class="cell">
            <?php echo $form->dropDownList($model, 'status', Lookup::items('PostStatus')); ?>
        </div>
    </div>

    <div class="col sizefill">
        <div class="cell">
            <?php echo $form->error($model, 'status'); ?>
        </div>
    </div>

</div>

<div class="col">
    <div class="col size1of5">
    </div>
    <div class="col sizefill">
        <div class="cell">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'button')); ?>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>

</div>
</div>
</div>
</div>
</div>
</div>


<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'calldialog',
    'options'=>array(
        'title'=>'test',
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>700,
        'height'=>500,
    ),
));?>
<div class="calldialog"></div>

<?php $this->endWidget();?>
