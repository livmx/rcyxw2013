<?php
$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Status','url'=>array('index')),
    array('label'=>'Manage Status(advance mode) ','url'=>array('adminAdv')),
);
?>

<style type="text/css">
    .status-item {padding: 10px 0 10px 0;}
    .divider {margin-top: 20px; border-bottom: 1px solid
    #ccc;}
    .status-item .span1 a {color:red;}
</style>
<div class="cell">

    <h1>Create Status ddd</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
    <p class="divider"></p>

        <?php
        Yii::app()->controller->beginClip('myStatus');
        Yii::app()->runController('/status/status/listRecentStatus');
        Yii::app()->controller->endClip();
        ?>
<?php

    $this->widget('my.widgets.CascadeFr.CascadeTabView',array(
        'activeTab'=>'tab1',
        'tabs'=>array(
            'tab1'=>array(
                'title'=>'我的状态',
                'content'=>  $this->clips['myStatus'],
                'active'=>true,
            ),

            'tab2'=>array(
                'title'=>'tab 2 title',
                'content'=>'http://www.yiiframework.com/',
            ),
            'tab4'=>array(
                'title'=>'tab 2 title',
                'url'=>'',
                'ajax'=>true ,
            ),
        ),
        'htmlOptions'=>array(

        )
    ));
    ?>


</div>