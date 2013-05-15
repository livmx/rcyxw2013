<?php $this->beginContent('//layouts/main'); ?>
    <div class="container site-body">

        <div class="cell">

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
<?php $this->endContent(); ?>