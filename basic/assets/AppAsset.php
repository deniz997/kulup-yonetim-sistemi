<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/sb-admin-2.min.css'
    ];
    public $js = [
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery-easing/jquery.easing.min.js',
        'js/sb-admin-2.min.js',
        'vendor/chart.js/Chart.min.js',
        'js/demo/chart-area-demo.js',
        'js/demo/chart-pie-demo.js',
        'vendor/datatables/jquery.dataTables.min.js',
        'vendor/datatables/dataTables.bootstrap4.min.js',
        'js/demo/datatables-demo.js',
        'js/demo/chart-bar-demo.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        FontAwesomeAsset::class
    ];
}
