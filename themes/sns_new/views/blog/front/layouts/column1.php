<?php $this->beginContent('/layouts/main'); ?>
<div class="container">

    <div class="container site-body">

        <div class="cell">

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

        </div>

    </div>
</div>
<?php $this->endContent(); ?>
