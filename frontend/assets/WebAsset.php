<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class WebAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/bootstrap.min.css',
//        'font-awesome/css/font-awesome.min.css',
//        'css/animate.css',
//        'css/style.css',
//        'css/default.css',
        'css/site.css',
        'css/web.css',
    ];
    public $js = [
//        'js/jquery.min.js',
//        'js/bootstrap.min.js',
//        'js/jquery.easing.min.js',
//        'js/jquery.scrollTo.js',
//        'js/wow.min.js',
//        'js/custom.js',
        'js/web.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}