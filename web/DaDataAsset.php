<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 10.08.15
 * Time: 23:35
 */

namespace mazurva\web;

use yii\web\AssetBundle;

/**
 * DaData AssetBundle
 * @since 0.1
 */
class DaDataAsset extends AssetBundle
{
    public $sourcePath = '@vendor/mazurva/suggestions-jquery/dist';

    public $css = [
        'css/suggestions.css',
    ];
    public $js = [
        'js/jquery.suggestions.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}