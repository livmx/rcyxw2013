<?php $this->beginContent('//layouts/main'); ?>

    <div class="container site-body">

        <div class="cell">
            <div class="col size1of4">
                <?PHP $this->widget('user.widgets.usercenter.AccountControlBox');?>
            </div>
            <div class="col sizefill">
                <?php  YsPageBox::beginPanel(); ?>
                <?php echo $content; ?>
                <?php  YsPageBox::endPanel();?>
            </div>
        </div>

    </div>

<?php $this->endContent(); ?>