<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yiqing
 * Date: 12-4-10
 * Time: 下午1:18
 *------------------------------------------------------------
 *                 _            _
 *                (_)          (_)
 *        _   __  __   .--. _  __   _ .--.   .--./)
 *       [ \ [  ][  |/ /'`\' ][  | [ `.-. | / /'`\;
 *        \ '/ /  | || \__/ |  | |  | | | | \ \._//
 *      [\_:  /  [___]\__.; | [___][___||__].',__`
 *       \__.'            |__]             ( ( __))
 *
 *--------------------------------------------------------------
 * To change this template use File | Settings | File Templates.
 */
class WijList extends EWijmoWidget
{
    public function init(){
        parent::init();
        $this->registerCssFile('themes/wijmo/jquery.wijmo.wijsuperpanel.css',
            'themes/wijmo/jquery.wijmo.wijlist.css');
        $this->registerScriptFile('external/jquery.mousewheel.min.js,
             wijmo/jquery.wijmo.wijutil.js,
             wijmo/jquery.wijmo.wijsuperpanel.js,
             wijmo/jquery.wijmo.wijlist.js',CClientScript::POS_HEAD);
    }

    public function run(){
        //比较蛋疼
        $this->wijInit = false ;
        parent::run();
    }
}
