<?php $this->beginContent(UserHelper::getUserBaseLayoutAlias('userCenterContent')); ?>
<?php  $currentUser = UserHelper::getLoginUserModel() ; ?>

            <?php if(Layout::hasRegion('rightSideBar')): ?>

                <div class="col size7of9">

                    <?php echo $content; ?>

                </div>

                <div class="col sizefill">
                  <?php Layout::renderRegion('rightSideBar'); ?>
                </div>
                
            <?php else:?>

                <div class="col">

                    <?php echo $content; ?>

                </div>

            <?php  endif; ?>



<?php $this->endContent(); ?>