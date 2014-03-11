<?php
/**
 * Created by PhpStorm.
 * User: yiqing
 * Date: 14-3-11
 * Time: 上午9:16
 */

class SysAudioAlbum extends SysAlbum{

    public $type = 'SysAudio';

    /**
     * 看下samdark的wiki 如何处理表继承问题的
     *
     * @return array
     */
    public function defaultScope(){

        return array();
    }
} 