<?php $this->beginContent('//layouts/main'); ?>

    <div class="container site-body">

        <div class="cell">
            <div class="col size2of9">
                <?PHP $this->widget('user.widgets.usercenter.AccountControlBox');?>
            </div>

            <div class="col sizefill">
                <?php YsPageBox::beginPanel(); ?>
                <div class="cell">
                    <ul class="nav">
                        <li class="">
                            <a href="<?php echo BlogHelper::getCreateBlogUrl() ;?>" class="">创建日志</a>
                        </li>
                        <li class="active">
                            <a href="#" class="">Active item</a>
                        </li>
                        <li class="disabled">Disabled item</li>
                        <li class=""><a href="#" class="">Another normal item</a></li>
                    </ul>
                </div>
                <?php YsPageBox::endPanel() ; ?>
                <?php  YsPageBox::beginPanel(); ?>
                <?php echo $content; ?>
                <?php  YsPageBox::endPanel();?>
            </div>
        </div>

    </div>

<?php $this->endContent(); ?>