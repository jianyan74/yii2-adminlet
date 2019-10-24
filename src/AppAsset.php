<?php

namespace jianyan\adminlet;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Class AppAsset
 * @package jianyan\adminlet
 * @author jianyan74 <751393839@qq.com>
 */
class AppAsset extends AssetBundle
{
    public $css = [
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/Ionicons/css/ionicons.min.css',
        'bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css'
    ];

    public $js = [
        'bower_components/bootstrap/dist/js/bootstrap.min.js',
        'bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
        'bower_components/fastclick/lib/fastclick.js',
        'dist/js/adminlte.js',
        'dist/js/demo.js',
    ];

    public $depends = [
        YiiAsset::class,
        CompatibilityIEAsset::class,
        HeadJsAsset::class,
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/resources';
        parent::init();
    }
}
