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


    /**
     * @param $data
     * @param $actor
     */
    public static function processTypeStatus($data, $actor = array())
    {
        $controller = Yii::app()->getController();

        $type = $data['type'];
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
            // above is core status
            // 注意第三方插入的类型可能找不到渲染处理器！！
            // echo __METHOD__;
            $statusTypeHandler = self::getStatusHandler($type);
            if ($statusTypeHandler !== null) {
                $statusTypeHandler->actor = $actor;
                $statusTypeHandler->data = $data;
                $statusTypeHandler->renderBody();
            }
        }

    }

    /**
     *  获取状态类型
     * @param string $typeReference
     * @return string
     */
    static public function getStatusTypeName($typeReference = '')
    {
        $statusLabels = array(
            'image' => '发布图片',
            'video' => '分享视频',
            'link' => '分享链接',
            'status' => '发布状态',
            'update' => '发布状态',
        );
        if (isset($statusLabels[$typeReference])) {
            return $statusLabels[$typeReference];
        } else {
            return '未知类型:' . $typeReference;
        }
    }

    /**
     * @var array
     */
    static protected $typeHandlers = array();


    /**
     * @param string $statusTypeReference
     * @return AbstractStatusHandler|null
     */
    static public function getStatusHandler($statusTypeReference = '')
    {

        if (!isset(self::$typeHandlers[$statusTypeReference])) {
            // 取db  仍旧可以使用缓存
            $eq = EasyQuery::instance('status_type');
            $statusTypeRow = $eq->queryRow('id=:type', array(':type' => $statusTypeReference));

            $statusTypeHandlerClass = $statusTypeRow['handler'];
            if (empty($statusTypeHandlerClass)) {
                return null;
            }
            $statusTypeHandlerObj = Yii::createComponent(array('class' => $statusTypeHandlerClass));

            self::$typeHandlers[$statusTypeReference] = $statusTypeHandlerObj;
        }
        return self::$typeHandlers[$statusTypeReference];
    }
}
