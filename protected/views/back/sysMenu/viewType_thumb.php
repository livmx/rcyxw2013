<li class="span3">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('label')); ?>:</b>
	<?php echo CHtml::encode($data->label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('params')); ?>:</b>
	<?php echo CHtml::encode($data->params); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ajaxoptions')); ?>:</b>
	<?php echo CHtml::encode($data->ajaxoptions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('htmloptions')); ?>:</b>
	<?php echo CHtml::encode($data->htmloptions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_visible')); ?>:</b>
	<?php echo CHtml::encode($data->is_visible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_code')); ?>:</b>
	<?php echo CHtml::encode($data->group_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('label_en')); ?>:</b>
	<?php echo CHtml::encode($data->label_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_to')); ?>:</b>
	<?php echo CHtml::encode($data->link_to); ?>
	<br />

	*/ ?>

	<?php echo CHtml::checkBox('ids[]',false,array('class'=>'batch-op-item','value'=>$data->id)); ?>		     <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'buttons'=>array(
            array('label'=>CHtml::encode('查看'), 'url'=>array('view','id'=>$data->id)),
            array('label'=>CHtml::encode('编辑'), 'url'=>array('update','id'=>$data->id)),
            array('label'=>CHtml::encode('删除'), 'url'=>array('delete','id'=>$data->id),'htmlOptions'=>array('class'=>'delete')),
        ),
    ));
    ?>
</li>