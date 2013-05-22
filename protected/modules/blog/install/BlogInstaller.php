<?php
Yii::app()->getModule('blog');
/**
 * Created by JetBrains PhpStorm.
 * User: yiqing
 * Date: 12-8-24
 * Time: 下午12:19
 * To change this template use File | Settings | File Templates.
 */
class BlogInstaller extends BaseModuleInstaller
{

    public function install()
    {

        echo __METHOD__;
        $mig = new BlogInstallMigration();
        $mig->up();

    }

    public function uninstall()
    {
        echo __METHOD__;
        $mig = new BlogInstallMigration();
        $mig->down();

    }


}

class BlogInstallMigration extends CDbMigration
{

    public function safeUp()
    {

        /**
         * VALUES ('id',
        'type_name',
        'type_reference',
        'active',
        'handler',
        'is_core');
         */

        //  注册动态处理器
        $this->insert('status_type', array(
            'type_name' => 'post a blog ',
            'id' => 'blog_create',
            'active' => 1,
            'handler' => 'blog.statusWall.BlogStatusHandler',
            'is_core' => 0,
        ));


        AdminMenu::addTempAdminMenu(array(
           'label'=>'日志系统分类管理',
            'url'=>'/blog/blogSysCategory/admin',
        ));

        AdminMenu::addTempAdminMenu(array(
            'label'=>'日志系统分类创建',
            'url'=>'/blog/blogSysCategory/create',
        ));
    }

    public function safeDown()
    {
        $this->delete('status_type', 'id=:type_ref', array(':type_ref' => 'blog_create'));
    }
}

