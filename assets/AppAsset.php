<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/font-awesome.css',
        'css/main.css',
        'css/prettyPhoto.css',
        'css/price-range.css',
        'css/responsive.css',
        'css/site.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/contact.js',
        'js/gmaps.js',
        'js/html5jiv.js',
        'js/jquery.js',
        'js/jquery.prettyPhoto.js',
        'js/jquery.scrollUp.min.js',
        'js/main.js',
        'js/price-range.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
