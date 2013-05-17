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

        $this->insert('status_type', array(
            'type_name' => 'post a blog ',
            'type_reference' => 'blog_create',
            'active' => 1,
            'handler' => 'blog.statusWall.BlogStatusHandler',
            'is_core' => 0,
        ));
        //......................................................................\\
        $statusTypeId = $this->getDbConnection()->getLastInsertID();
        $saveToData = array('type_id' => $statusTypeId);
        ArrayUtil::saveArray2file($saveToData,Yii::getPathOfAlias('blog.data.statusWall'),'statusType');
        //......................................................................//
    }

    public function safeDown()
    {
        $this->delete('status_type', 'type_reference=:type_ref', array(':type_ref' => 'blog_create'));
    }
}

