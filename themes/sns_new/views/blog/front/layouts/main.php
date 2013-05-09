<?php $this->beginContent('//layouts/main'); ?>


    <div class="container site-body">

        <div class="cell">

            <?php if(Layout::hasRegion('top')): ?>
                <?php Layout::renderRegion('top'); ?>
            <?php endif; ?>

           <?php echo $content ; ?>

        </div>

    </div>

<?php $this->endContent(); ?>