<?php
$this->breadcrumbs=array(
	'Msgs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Msg','url'=>array('index')),
	array('label'=>'Create Msg','url'=>array('create'),'linkOptions'=>array('class'=>'ajax_create')),
	array('label'=>'View Msg','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Msg','url'=>array('admin')),
);
?>

<h1>Update Msg <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>