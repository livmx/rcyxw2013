<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
    <?php
    $this->widget('my.widgets.amazium.Amazium'); ?>
    <style type="text/css">

            /* 由于css的继承性 高度的百分比设定如果不设定父级的高度那么会不起作用的*/
        html {
            min-height: 100%;
            _height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
            _height: 100%;
        }

        #content {
            background: #EEE;
            border-left: 1px solid #000;
            border-right: 1px solid #000;
            /*padding: 0 20px 0 20px;*/
            /*margin: auto;*/
            font: 1.5em arial, verdana, sans-serif;
            /*width: 960px;*/
            min-height: 100%;
            _height: 100%;
        }

        #header {
            background: #ff33cc;
        }

        .top-nav {
            background: #cc8e72;
            text-align: center;
            height: 28px;
            line-height: 28px; /*线高跟高一样可以实现垂直居中*/
        }

        .top-nav-menu {
            list-style-type: none;
        }

        .footer .friend-links li {
            list-style-type: none;
            float: left;
        }

        .footer .friend-links {
            text-align: center;
        }

        .divider {
            width: 100%;
            height: 5px; /*IE 下最小18 大于18在IE下才有效果！*/
            clear: both;
            overflow: hidden; /*解决18px的IE问题*/
        }

        /* 没啥效果呀！*/
        .FullHeight {
            height: auto !important; /* ie 6 will ignore this */
            height: 100%; /* ie 6 will use this instead of min-height */
            min-height: 100%; /* ie 6 will ignore this */
        }
    </style>

    <script type="text/javascript">

        /**
         * http://www.eirikhoem.net/blog/2011/08/29/yii-framework-preventing-duplicate-jscss-includes-for-ajax-requests/
         */
        $.ajaxSetup({
            global:true,
            dataFilter:function (data, type) {
                var getScriptUrl = function (entry) {
                    if (entry.type == "text/css") {
                        return entry.href;
                    }
                    return entry.src;
                };
                // only ‘text’ and ‘html’ dataType should be filtered
                if (type && type != "html" && type != "text") {
                    return data;
                }
                var selector = 'script[src],link[rel="stylesheet"] ';
                // get loaded scripts from DOM the first time we execute.
                if (!$._loadedScripts) {
                    $._loadedScripts = {};
                    $._dataHolder = $(document.createElement('div'));

                    var loadedScripts = $(document).find(selector);

                    //fetching scripts from the DOM
                    for (var i = 0, len = loadedScripts.length; i < len; i++) {
                        $._loadedScripts[getScriptUrl(loadedScripts[i])] = 1;
                    }
                }
                //$._dataHolder.html(data) does not work
                $._dataHolder[0].innerHTML = data;
                // iterate over new scripts and remove if source is already in DOM:
                var incomingScripts = $($._dataHolder).find(selector);
                for (var i = 0, len = incomingScripts.length; i < len; i++) {
                    if ($._loadedScripts[getScriptUrl(incomingScripts[i])]) {
                        $(incomingScripts[i]).remove();
                    }
                    else {
                        $._loadedScripts[getScriptUrl(incomingScripts[i])] = 1;
                    }
                }
                return $._dataHolder[0].innerHTML;
            }
        });
    </script>
</head>

<body>

<?php

$topUserMenus = array();
if (Yii::app()->user->isGuest) {
    $topUserMenus = array(
        array('label' => 'Home', 'url' => array('/site/index')),
        array('url' => Yii::app()->getModule('user')->loginUrl, 'label' => Yii::app()->getModule('user')->t("Login"),),
        array('url' => Yii::app()->getModule('user')->registrationUrl, 'label' => Yii::app()->getModule('user')->t("Register"),),
        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
    );
} else {

    $topUserMenus = array(
        array('label' => Yii::app()->user->name, 'url' => Yii::app()->getModule('user')->returnUrl,),
        //array('url' => Yii::app()->getModule('user')->profileUrl, 'label' => Yii::app()->getModule('user')->t("Profile"), 'visible' => !Yii::app()->user->isGuest),
        '---',
        array('label' => '消息', 'url' => '#', 'items' => array(
            array('label' => '私信', 'url' => '#'),
            array('label' => 'Another action', 'url' => '#'),
            array('label' => 'Something else here', 'url' => '#'),
            '---',
            array('label' => 'Separated link', 'url' => '#'),
        )),
        '---',
        array('label' => '设置', 'url' => '#', 'items' => array(
            array('label' => '图像', 'url' => array('/user/settings/photo')),
            array('label' => 'Another action', 'url' => '#'),
            array('label' => 'Something else here', 'url' => '#'),
            '---',
            array('label' => 'Separated link', 'url' => '#'),
        )),
        '---',
        array('url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout") . ' (' . Yii::app()->user->name . ')', 'visible' => !Yii::app()->user->isGuest),
    );
}

?>
<div id="header">
    <div class="head-top">
        this is header
    </div>
    <div class="row">
        <div class="grid_4">
            <span class="logo example">
                <img src="http://static.yiiframework.com/css/img/logo.png"/>
            </span>

        </div>
        <div class="grid_5"><span class="example">4</span></div>
        <div class="grid_3">
            <?php foreach (range(0, 10) as $i): ?>
            <a href="">tool menu</a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="divider"></div>
    <div class="top-nav">
        this is header nav

        <?php foreach (range(0, 10) as $i): ?>
        <a href="">topNav <?php echo $i ?></a>|
        <?php endforeach;  ?>
    </div>
</div>

<div class="divider"></div>
<div id="content" class="FullHeight">
    <!--    主布局不做宽度限制 交由下面的子布局决定-->
    <?php echo $content; ?>
</div>
<hr/>
<div class="row footer" style="text-align: center; padding-bottom: 10px;">
    <footer>
        <div>
            <ul class="friend-links">
                <?php for ($i = 1; $i <= 20; $i++): ?>
                <li>
                    <a href="">友链</a>
                </li>
                <?php endfor;?>
            </ul>
        </div>
        <div class="divider"></div>
        <p class="powered">
            Powered
            by <?php echo CHtml::link('Yii PHP framework', 'http://www.yiiframework.com', array('target' => '_blank')); ?>
            /
            <?php echo CHtml::link('jQuery', 'http://www.jquery.com', array('target' => '_blank')); ?> /
            <?php echo CHtml::link('YiiBooster', 'http://yii-booster.clevertech.biz/', array('target' => '_blank')); ?>
            /
        </p>

        <p class="copy">
            &copy;YiiSpace <?php echo date('Y'); ?>
        </p>

    </footer>
</div>
<?php

$this->widget('application.my.widgets.jnotify.JNotify');


?>
</body>

</html>