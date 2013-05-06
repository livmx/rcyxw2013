<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yiqing
 * Date: 12-8-16
 * Time: 下午5:02
 * To change this template use File | Settings | File Templates.
 */
class StatusManager
{


    public static function processTypeStatus($data)
    {
        $controller = Yii::app()->getController();
        /*
        switch($data['type_reference']){
            case 'image':
                echo 'hi'; break;
                default:
                echo __METHOD__;
        }*/
        $type = $data['type_reference'];
        echo $data['update'];
        if ($type == 'update') {
            echo '';
        } elseif ($type == 'image') {
            $controller->renderPartial('status.plugins.image.imageView', array('data' => $data));
        } elseif ($type == 'video') {
            $controller->renderPartial('status.plugins.video.videoView', array('data' => $data));
        } elseif ($type == 'link') {
            $controller->renderPartial('status.plugins.link.linkView', array('data' => $data));
        } else {
            echo __METHOD__;
        }

    }

    /**
     *  获取状态类型
     * @param string $typeReference
     * @return string
     */
    static public function getStatusTypeName($typeReference=''){
        $statusLabels = array(
            'image'=>'发布图片',
            'video'=>'分享视频',
            'link'=>'分享链接',
            'status'=>'发布状态',
            'update'=>'发布状态',
        );
        if(isset($statusLabels[$typeReference])){
            return $statusLabels[$typeReference];
        }else{
            return '未知类型:'.$typeReference;
        }
    }
}
