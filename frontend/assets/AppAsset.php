<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'css/main.css',
        'css/util.css',
        'vendor/select2/select2.min.css',
        'vendor/slick/slick.css',
        'vendor/lightbox2/css/lightbox.min.css',
        'vendor/animsition/css/animsition.min.css',

    ];
    public $js = [
        'vendor/animsition/js/animsition.min.js',
        'vendor/slick/slick.min.js',
        'vendor/lightbox2/js/lightbox.min.js',
        'vendor/select2/select2.min.js',
        'js/slick-custom.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init(){

    }
}
