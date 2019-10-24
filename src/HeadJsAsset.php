<?php

namespace jianyan\adminlet;

use yii\web\AssetBundle;

/**
 * Class HeadJsAsset
 * @package jianyan\adminlet
 * @author jianyan74 <751393839@qq.com>
 */
class HeadJsAsset extends AssetBundle
{
    public $js = [
        'bower_components/jquery/dist/jquery.min.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/resources';
        parent::init();
    }
}