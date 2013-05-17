<div class="col">
    <div class="cell panel">
        <div class="body">
            <div class="cell">
                <div class="col sizefit">
                    <div class="cell">
                        <img src="<?php echo UserHelper::getLoginUserModel()->getIconUrl() ; ?>" width="75" height="75" alt="">
                    </div>
                </div>
                <div class="col sizefill">
                    <div class="cell">
                        <a href="#"><?php echo UserHelper::getLoginUserModel()->username ; ?> </a>

                        <div class="cell">
                            <?php  StatusManager::processTypeStatus($data); ?>
                        </div>


                    </div>

                </div>
            </div>
            <div class="divider"></div>
            <p class="float-right">
                <?php echo CHtml::link(CHtml::encode($data['id']), array('view', 'id' => $data['id'])); ?>
                <?php echo CHtml::encode($data['creator']), WebUtil::timeAgo2(strtotime($data['created'])); ?>
            </p>
        </div>
    </div>
</div>