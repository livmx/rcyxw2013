<?php $this->beginContent('//layouts/main'); ?>
   <?php $currentUser = UserHelper::getSpaceOwnerModel() ;  ?>

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
                                <a href="<?php echo $this->createUrl('/blog/member/list',array('u'=> Yii::app()->user->getId())); ?> ">我的博文</a>
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
                        <a href="<?php echo $this->createUrl('/blog/member/list',array('u'=> UserHelper::getSpaceOwnerId() )); ?> ">博文</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container site-body">

        <div class="cell">

            <div class="col">
                <div class="col size7of9">
                    <?php echo $content; ?>
                </div>

                <div class="col sizefill">
                    <div class="cell">
                        <?php UserHelper::renderSimpleProfile(UserHelper::getSpaceOwnerModel()) ;?>
                    </div>
                    <div class="cell">
                        <div class="col">

                            <?php if(UserHelper::getIsOwnSpace()): ?>
                                <div class="menu cell">
                                    <ul class="left links nav">
                                        <li class="">
                                            <a href="<?php echo $this->createUrl('/blog/category/admin'); ?>" class="">分类管理</a>
                                        </li>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <div class="cell menu">
                                <script type="text/javascript">
                                    $(function(){
                                        var url = "<?php echo $this->createUrl('category/ajaxMyCategories',array('userId'=>UserHelper::getSpaceOwnerId())); ?>";
                                        $("#myBlogCategories").load(url);
                                    });
                                </script>
                                <ul class="stat left nav" id="allBlogOfMember">
                                    <li class="">
                                        <a href="<?php echo $this->createUrl('/blog/member/list',array('u'=>UserHelper::getSpaceOwnerId()) ); ?>" class="">所有日志</a>
                                    </li>
                                </ul>
                                <ul class="stat left nav" id="myBlogCategories">

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
<?php $this->endContent(); ?>