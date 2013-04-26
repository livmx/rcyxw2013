<?php
/**
 *  
 * User: yiqing
 * Date: 13-4-26
 * Time: 下午2:34
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * -------------------------------------------------------
 */
$this->widget('application.extensions.morris.MorrisChartWidget', array(
    'id'      => 'myChartElement',
    'options' => array(
        'chartType' => 'Bar',
        'data'      => $data ,
        'xkey'      => 'w',
        'ykeys'     => array('times'),
        'labels'    => array('times'),
       // 'axes'=>false,
    ),
));