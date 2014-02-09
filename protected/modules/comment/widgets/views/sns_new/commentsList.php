
<?php
/**
 *  nested widget (CListView is in CommentsListWidget ) !  you can expose config from the outer widget
 */
$this->widget('zii.widgets.CListView', array(
    'id'=>$this->id ,
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>'{pager}{items}{pager}',
));

?>