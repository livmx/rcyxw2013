<?php
/**
 *  
 * User: yiqing
 * Date: 13-5-17
 * Time: 上午10:48
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * -------------------------------------------------------
 */

abstract class AbstractStatusHandler  {


    /**
     * @var User|array
     */
    public $actor ;

    /**
     * @var array
     */
    public $data ;

    /**
     * @return mixed
     */
    public function renderTitle(){

    }

    /**
     * @return mixed
     */
    public function renderBody(){

    }
}