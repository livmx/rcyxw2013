<?php
return array(
    'application.models.*',
    'application.models.forms.*',
    'application.components.*',

    // giix components
    'ext.giix-components.*',

    'application.components.extensionloader.*',
    // user module
    'application.modules.user.models.*',
    'application.modules.user.components.*',

    // friend module
    'application.modules.friend.models.*',
    'application.modules.friend.components.*',

    //dashboad module
    'application.modules.sdashboard.components.*',
    'application.modules.sdashboard.models.*',

    //wijmo
    'application.my.widgets.wijmo.*',

    //backend
    'application.modules.backend.components.*',
    'application.modules.backend.models.*',

    //my
    'application.my.components.*',
    'application.my.interfaces.*',

    // EventInterceptor is required by EventBridgeBehavior
    'ext.event-interceptor.*',

    // 导入Cascade框架目录：
    'application.my.widgets.CascadeFr.*',
);