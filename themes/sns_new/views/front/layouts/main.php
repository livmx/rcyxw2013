<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <?php $this->widget('my.widgets.CascadeFr.CascadeFr'); ?>
    <?php PublicAssets::registerCssFile('css/site.css'); ?>

    <title>Cascade Framework</title>
    <meta name="description" content="Professional Frontend framework that makes building websites easier than ever.">
    <!--    <link rel="shortcut icon" href="../vendor/assets/img/favicon.ico" type="image/x-icon" />-->
    <meta name="viewport" content="width=device-width">

    <style type="text/css">


    </style>
    <!--    for 雅安地震-->
    <style type="text/css">
        /*
        html {
            filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
            -webkit-filter: grayscale(100%);
            filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */
        }
     /*
        img {
            _filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=0);
            -webkit-filter: grayscale(100%);
            filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */
        }*/
    </style>
    '
</head>
<body class="narrow">
<div class="site-center">
    <div class="col sizefill background-orange">
        dododoodo

    </div>
    <div class="col">
        <div class="col sizefit mobile-sizefit">
            <div class="cell">
                <div class="col">
                    <div class="col size6of9">
                        <a href="<?php echo $this->createUrl('/site/index'); ?>" class="logo">
                            <?php echo Yii::app()->name; ?>
                        </a>
                    </div>

                    <div class="col sizefill ">
                        <div class="col">
                            <div class="pipes">
                                <?php
                                if(UserHelper::getIsLoginUser()) {
                                    $items = array(
                                        array('label' => '个人空间', 'url' =>UserHelper::getUserSpaceUrl(Yii::app()->user->getId())),
                                        array('label' => '个人中心', 'url' =>UserHelper::getUserCenterUrl()),
                                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'))
                                    );
                                }else{
                                    $items = array(
                                        array('label' => 'Home', 'url' => array('/site/index')),
                                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                                        array('label' => 'Contact', 'url' => array('/site/contact')),
                                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                    );
                                }
                                 $this->widget('zii.widgets.CMenu', array(
                                    'htmlOptions' => array('class' => 'nav'),
                                    'linkLabelWrapper' => 'span',
                                    'activeCssClass' => 'current',
                                    'items'=>$items,
                                )); ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="pipes">
                                <ul class="nav">
                                    <li class="hovered-item"><a href="#" class="child-of-hovered-item">Normal item</a>
                                    </li>
                                    <li class="active"><a href="#" class="">Active item</a></li>
                                    <li class="disabled">Disabled item</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="site-nav col sizefill background-black">
    <div class="cell">

    </div>

</div>
<div class="site-center">
    <?php echo $content; ?>
</div>

<div class="divider" style="background-color: red;height: 5px;border-bottom: 2px solid #2A333C;margin: 10px 0 ;"></div>
<div class="site-center">
    <div class="site-footer">
        <div class="cell">
            <div id="sociallogos">
                <a href="https://twitter.com/cascadecss"><span class="icon icon-32 icon-twitter"></span></a>
                <a href="http://www.facebook.com/cascadeframework"><span class="icon icon-32 icon-facebook-sign"></span></a>
                <a href="https://github.com/CascadeFramework"><span class="icon icon-32 icon-github"></span></a>

                <div class="col">
                    &#169; 2013, <a href="https://twitter.com/johnslegers">John Slegers</a>
                </div>
            </div>
            <a href="index.html" class="powered-by"></a>
        </div>
    </div>
</div>
<div class="col">
    <div class="cell" style="text-align: center ;">
        <?php $this->widget('application.widgets.FriendLinksWidget'); ?>
    </div>
</div>

</body>
</html>
