<?php
$this->layout = false;
 Yii::import('my.ui.easyui.*');
//  easyUI  跟dwz 互斥 只能二选一！
// EZui::registerCoreScripts();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=7"/>
    <title>简单实用国产jQuery UI框架 - DWZ富客户端框架(J-UI.com)</title>

    <style type="text/css">
        #header {
            height: 85px
        }

        #leftside, #container, #splitBar, #splitBarProxy {
            top: 90px
        }
    </style>
    <?php $this->widget("ext.dwz.DwzWidget"); ?>
</head>

<body scroll="no">
<div id="layout">
    <div id="header">
        <div class="headerNav">
            <a class="logo" href="http://j-ui.com">标志</a>
            <ul class="nav">
                <li id="switchEnvBox"><a href="javascript:">（<span>北京</span>）切换城市</a>
                    <ul>
                        <li><a href="sidebar_1.html">北京</a></li>
                        <li><a href="sidebar_2.html">上海</a></li>
                        <li><a href="sidebar_2.html">南京</a></li>
                        <li><a href="sidebar_2.html">深圳</a></li>
                        <li><a href="sidebar_2.html">广州</a></li>
                        <li><a href="sidebar_2.html">天津</a></li>
                        <li><a href="sidebar_2.html">杭州</a></li>
                    </ul>
                </li>
                <li><a href="https://me.alipay.com/dwzteam" target="_blank">捐赠</a></li>
                <li><a href="changepwd.html" target="dialog" width="600">设置</a></li>
                <li><a href="http://www.cnblogs.com/dwzjs" target="_blank">博客</a></li>
                <li><a href="http://weibo.com/dwzui" target="_blank">微博</a></li>
                <li><a href="http://bbs.dwzjs.com" target="_blank">论坛</a></li>
                <li><a href="login.html">退出</a></li>
            </ul>
            <ul class="themeList" id="themeList">
                <li theme="default">
                    <div class="selected">蓝色</div>
                </li>
                <li theme="green">
                    <div>绿色</div>
                </li>
                <!--<li theme="red"><div>红色</div></li>-->
                <li theme="purple">
                    <div>紫色</div>
                </li>
                <li theme="silver">
                    <div>银色</div>
                </li>
                <li theme="azure">
                    <div>天蓝</div>
                </li>
            </ul>
        </div>

        <div id="navMenu">
            <ul>
                <li class="selected"><a href="sidebar_1.html"><span>资讯管理</span></a></li>
                <li><a href="sidebar_2.html"><span>订单管理</span></a></li>
                <li><a href="sidebar_1.html"><span>产品管理</span></a></li>
                <li><a href="sidebar_2.html"><span>会员管理</span></a></li>
                <li><a href="sidebar_1.html"><span>服务管理</span></a></li>
                <li><a href="sidebar_2.html"><span>系统设置</span></a></li>
            </ul>
        </div>
    </div>

    <div id="leftside">
        <div id="sidebar_s">
            <div class="collapse">
                <div class="toggleCollapse">
                    <div></div>
                </div>
            </div>
        </div>
        <div id="sidebar">
            <div class="toggleCollapse"><h2>主菜单</h2>

                <div>收缩</div>
            </div>

            <div class="accordion" fillSpace="sidebar">
                <div class="accordionHeader">
                    <h2><span>Folder</span>界面组件</h2>
                </div>
                <div class="accordionContent">
                    <ul class="tree treeFolder">
                        <li><a href="tabsPage.html" target="navTab">主框架面板</a>
                            <ul>
                                <li><a href="main.html" target="navTab" rel="main">我的主页</a></li>
                                <li><a href="http://www.baidu.com" target="navTab" rel="page1">页面一(外部页面)</a></li>
                                <li><a href="demo_page2.html" target="navTab" rel="external" external="true">iframe
                                    navTab页面</a></li>
                                <li><a href="demo_page1.html" target="navTab" rel="page1" fresh="false">替换页面一</a></li>
                                <li><a href="demo_page2.html" target="navTab" rel="page2">页面二</a></li>
                                <li><a href="demo_page4.html" target="navTab" rel="page3" title="页面三（自定义标签名）">页面三</a>
                                </li>
                                <li><a href="demo_page4.html" target="navTab" rel="page4" fresh="false">测试页面（fresh="false"）</a>
                                </li>
                                <li><a href="w_editor.html" target="navTab">表单提交会话超时</a></li>
                                <li><a href="demo/common/ajaxTimeout.html" target="navTab">navTab会话超时</a></li>
                                <li><a href="demo/common/ajaxTimeout.html" target="dialog">dialog会话超时</a></li>
                            </ul>
                        </li>

                        <li><a>常用组件</a>
                            <ul>
                                <li><a href="w_panel.html" target="navTab" rel="w_panel">面板</a></li>
                                <li><a href="w_tabs.html" target="navTab" rel="w_tabs">选项卡面板</a></li>
                                <li><a href="w_dialog.html" target="navTab" rel="w_dialog">弹出窗口</a></li>
                                <li><a href="w_alert.html" target="navTab" rel="w_alert">提示窗口</a></li>
                                <li><a href="w_list.html" target="navTab" rel="w_list">CSS表格容器</a></li>
                                <li><a href="demo_page1.html" target="navTab" rel="w_table">表格容器</a></li>
                                <li><a href="w_removeSelected.html" target="navTab" rel="w_table">表格数据库排序+批量删除</a></li>
                                <li><a href="w_tree.html" target="navTab" rel="w_tree">树形菜单</a></li>
                                <li><a href="w_accordion.html" target="navTab" rel="w_accordion">滑动菜单</a></li>
                                <li><a href="w_editor.html" target="navTab" rel="w_editor">编辑器</a></li>
                                <li><a href="w_datepicker.html" target="navTab" rel="w_datepicker">日期控件</a></li>
                                <li><a href="demo/database/db_widget.html" target="navTab"
                                       rel="db">suggest+lookup+主从结构</a></li>
                                <li><a href="demo/sortDrag/1.html" target="navTab" rel="sortDrag">单个sortDrag示例</a></li>
                                <li><a href="demo/sortDrag/2.html" target="navTab" rel="sortDrag">多个sortDrag示例</a></li>
                            </ul>
                        </li>

                        <li><a>表单组件</a>
                            <ul>
                                <li><a href="w_validation.html" target="navTab" rel="w_validation">表单验证</a></li>
                                <li><a href="w_button.html" target="navTab" rel="w_button">按钮</a></li>
                                <li><a href="w_textInput.html" target="navTab" rel="w_textInput">文本框/文本域</a></li>
                                <li><a href="w_combox.html" target="navTab" rel="w_combox">下拉菜单</a></li>
                                <li><a href="w_checkbox.html" target="navTab" rel="w_checkbox">多选框/单选框</a></li>
                                <li><a href="demo_upload.html" target="navTab" rel="demo_upload">iframeCallback表单提交</a>
                                </li>
                                <li><a href="w_uploadify.html" target="navTab" rel="w_uploadify">uploadify多文件上传</a></li>
                            </ul>
                        </li>
                        <li><a>组合应用</a>
                            <ul>
                                <li><a href="demo/pagination/layout1.html" target="navTab" rel="pagination1">局部刷新分页1</a>
                                </li>
                                <li><a href="demo/pagination/layout2.html" target="navTab" rel="pagination2">局部刷新分页2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="dwz.frag.xml" target="navTab" external="true">dwz.frag.xml</a></li>
                    </ul>
                </div>
                <div class="accordionHeader">
                    <h2><span>Folder</span>典型页面</h2>
                </div>
                <div class="accordionContent">
                    <ul class="tree treeFolder treeCheck">
                        <li><a href="demo_page1.html" target="navTab" rel="demo_page1">查询我的客户</a></li>
                        <li><a href="demo_page1.html" target="navTab" rel="demo_page2">表单查询页面</a></li>
                        <li><a href="demo_page4.html" target="navTab" rel="demo_page4">表单录入页面</a></li>
                        <li><a href="demo_page5.html" target="navTab" rel="demo_page5">有文本输入的表单</a></li>
                        <li><a href="javascript:;">有提示的表单输入页面</a>
                            <ul>
                                <li><a href="javascript:;">页面一</a></li>
                                <li><a href="javascript:;">页面二</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">选项卡和图形的页面</a>
                            <ul>
                                <li><a href="javascript:;">页面一</a></li>
                                <li><a href="javascript:;">页面二</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">选项卡和图形切换的页面</a></li>
                        <li><a href="javascript:;">左右两个互动的页面</a></li>
                        <li><a href="javascript:;">列表输入的页面</a></li>
                        <li><a href="javascript:;">双层栏目列表的页面</a></li>
                    </ul>
                </div>
                <div class="accordionHeader">
                    <h2><span>Folder</span>流程演示</h2>
                </div>
                <div class="accordionContent">
                    <ul class="tree">
                        <li><a href="newPage1.html" target="dialog" rel="dlg_page">列表</a></li>
                        <li><a href="newPage1.html" target="dialog" rel="dlg_page">列表</a></li>
                        <li><a href="newPage1.html" target="dialog" rel="dlg_page2">列表</a></li>
                        <li><a href="newPage1.html" target="dialog" rel="dlg_page2">列表</a></li>
                        <li><a href="newPage1.html" target="dialog" rel="dlg_page2">列表</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div id="container">
        <div id="navTab" class="tabsPage">
            <div class="tabsPageHeader">
                <div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
                    <ul class="navTab-tab">
                        <li tabid="main" class="main"><a href="javascript:;"><span><span
                                class="home_icon">我的主页</span></span></a></li>
                    </ul>
                </div>
                <div class="tabsLeft">left</div>
                <!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
                <div class="tabsRight">right</div>
                <!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
                <div class="tabsMore">more</div>
            </div>
            <ul class="tabsMoreList">
                <li><a href="javascript:;">我的主页</a></li>
            </ul>
            <div class="navTab-panel tabsPageContent layoutBox">
                <div class="page unitBox">
                    <?php $this->widget("ext.dwz.DwzAccordion", array(
                    'panels' => array(
                        'panel 1' => 'content for panel 1',
                        'panel 2' => 'content for panel 2',
                        // panel 3 contains the content rendered by a partial view
                        'panel 2' => 'content for panel 2',
                    ),
                )); ?>


                    <div class="tabs">
                        <div class="tabsHeader">
                            <div class="tabsHeaderContent">
                                <ul>
                                    <li class="selected"><a href="#"><span>标题1</span></a></li>
                                    <li><a href="#"><span>标题2</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tabsContent" style="height:150px;">
                            <div>内容1</div>
                            <div>内容2</div>
                        </div>
                        <div class="tabsFooter">
                            <div class="tabsFooterContent"></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<div id="footer">Copyright &copy; 2010 <a href="demo_page2.html" target="dialog">DWZ团队</a></div>

<!-- 注意此处js代码用于google站点统计，非DWZ代码，请删除 -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-16716654-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? ' https://ssl' : ' http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

</body>
</html>
