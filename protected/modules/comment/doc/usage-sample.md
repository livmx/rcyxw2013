~~~
[php]

<?php
  $model = User::model()->findByPk(user()->getId());
?>


<?php

$this->widget(
    'application.modules.comment.widgets.CommentsListWidget',
    array(
        'id'=> get_class($model).'_'.$model->primaryKey,
        'model' => $model,
        'modelId' => $model->id
    )
);


?>

<?php

$this->widget(
    'application.modules.comment.widgets.CommentFormWidget',
    array(
        'redirectTo' =>  request()->getUrl(), // $this->createUrl('/gallery/gallery/foto/', array('id' => $model->id)),
        'model' => $model,
        'modelId' => $model->id
    )
); ?>




~~~