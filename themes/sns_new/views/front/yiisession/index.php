<?php
/* @var $this YiisessionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Yiisessions',
);

$this->menu=array(
	array('label'=>'Create Yiisession', 'url'=>array('create')),
	array('label'=>'Manage Yiisession', 'url'=>array('admin')),
);
?>

<h1>Yiisessions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
