<?php
$profile = $model->profile ;
$picId = rand(1, 5);
$userPhotoUrl = (empty($profile)|| empty($profile->photo)) ? PublicAssets::instance()->url("images/user/avatars/{$picId}.jpg") : bu($profile->photo);

?>
<div class="thumbnail">
    <a href="<?php echo UserHelper::getUserSpaceUrl($model->primaryKey); ?>" target="_blank">
        <img src="<?Php echo $userPhotoUrl; ?>" width="120px" height="120px" alt=""/>
    </a>


    <h5><?php echo CHtml::encode($model->username); ?></h5>

    <p>
    <ul>
        <li>
            <?php echo CHtml::encode($model->getAttributeLabel('create_at')); ?>:
            <?php echo $model->create_at; ?>

        </li>
        <li>
            <?php echo CHtml::encode($model->getAttributeLabel('lastvisit_at')); ?>:
            <?php echo $model->lastvisit_at; ?>
        </li>
    </ul>
    </p>
</div>