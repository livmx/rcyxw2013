<div class="status-item">
    <?php echo CHtml::link(CHtml::encode($data['id']), array('view', 'id' => $data['id'])); ?>

    <b>update:</b>
    <?php echo CHtml::encode($data['update']); ?>
    <br/>
    <b>created:</b>
    <?php echo CHtml::encode($data['creator']), WebUtil::timeAgo2(strtotime($data['created'])); ?>
    <br/>
    <b>profile:</b>
    <?php echo CHtml::encode($data['profile']); ?>
    <br/>
    <b>approved:</b>
    <?php echo CHtml::encode($data['approved']); ?>
    <br/>
    <b>poster_name:</b>
    <?php echo CHtml::encode($data['poster_name']); ?>
    <br/>
    <b>image:</b>
    <?php echo CHtml::encode($data['image']); ?>
    <br/>
    <b>video_id:</b>
    <?php echo CHtml::encode($data['video_id']); ?>
    <br/>
    <b>url:</b>
    <?php echo CHtml::encode($data['url']); ?>
    <br/>
    <b>description:</b>
    <?php echo CHtml::encode($data['description']); ?>
    <br/>
<div class="status-body">
<?php  StatusManager::processTypeStatus($data); ?>
</div>
    <div class="divider"></div>
</div>

<div class="col">
    <div class="cell panel">
        <div class="body">
            <div class="cell">
                <div class="col sizefit">
                    <div class="cell">
                        <img src="<?php UserHelper::getLoginUserModel() ?>" alt="">
                    </div>
                </div>
                <div class="col sizefill">
                    <div class="cell">
                        <a href="#">Chen</a> says:<br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis adipiscing est. Curabitur vel dui dolor. Vestibulum molestie fermentum diam, nec interdum ante molestie ut. Integer consequat iaculis auctor. Duis vitae felis ligula, ultrices blandit dolor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>