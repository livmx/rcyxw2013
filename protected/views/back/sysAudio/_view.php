<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('summary')); ?>:</b>
	<?php echo CHtml::encode($data->summary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('singer')); ?>:</b>
	<?php echo CHtml::encode($data->singer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uri')); ?>:</b>
	<?php echo CHtml::encode($data->uri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_type')); ?>:</b>
	<?php echo CHtml::encode($data->source_type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('play_order')); ?>:</b>
	<?php echo CHtml::encode($data->play_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listens')); ?>:</b>
	<?php echo CHtml::encode($data->listens); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cmt_count')); ?>:</b>
	<?php echo CHtml::encode($data->cmt_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('glean_count')); ?>:</b>
	<?php echo CHtml::encode($data->glean_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_size')); ?>:</b>
	<?php echo CHtml::encode($data->file_size); ?>
	<br />

	*/ ?>

</div>