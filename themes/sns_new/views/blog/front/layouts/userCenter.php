<?php $this->beginContent('//layouts/main'); ?>
<?php  $currentUser = UserHelper::getLoginUserModel() ; ?>

    <div class="container site-body ">
        <div class="col">
            <div class="size5of7 col">
                <div class="col">
                    <div class="col size1of5 cell">
                        <img src="<?php echo UserHelper::getUserIconUrl($currentUser); ?>" width="64px" height="64px">
                    </div>
                    <div class="col sizefill">
                        <div class="menu cell">
                            <ul class="nav">
                                <li class=""><a href="#" class="">Normal item</a></li>
                                <li><a href="#">Another normal item</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu cell sizefill col">
                <div class="cell">
                    <ul class="links nav">
                        <?php if(!user()->getIsGuest()): ?>
                            <li class="">
                                <a href="<?php echo $this->createUrl('/blog/my/create'); ?>" class="">创建博文</a>
                            </li>
                            <li class="">
                                <a href="<?php echo $this->createUrl('/blog/my'); ?> ">我的博文</a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col border-top">
            <div class="menu cell page-sub-menu ">
                <ul class="bottom nav">
                    <li class="">
                        <a href="#" class="">相册</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl('/blog/my'); ?>">博文</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container site-body">

        <div class="cell">

            <div class="col size7of9">
                <?php  YsPageBox::beginPanel(); ?>
                <?php echo $content; ?>
                <?php  YsPageBox::endPanel();?>
            </div>

            <div class="col sizefill">
                <?php YsPageBox::beginPanelWithHeader(array('header'=>'博客分类')) ?>
                <div class="cell">
                    <div class="col">
                        <div class="menu cell">
                            <ul class="left links nav">
                                <li class="">
                                    <a href="<?php echo $this->createUrl('/blog/category/admin'); ?>" class="">日志管理</a>
                                </li>
                            </ul>
                        </div>
                        <div class="cell menu">
                            <ul class="stat left nav">
                                <li class=""><a href="#" class=""><span class="data">1,234</span>donuts</a></li>
                                <li class=""><a href="#" class=""><span class="data">567</span>kayaks</a></li>
                                <li><a href="#"><span class="data">23,456</span>kittens</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php YsPageBox::endPanel(); ?>
            </div>
        </div>

    </div>

<?php $this->endContent(); ?>