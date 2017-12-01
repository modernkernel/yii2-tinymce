<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace powerkernel\tinymce;

use yii\web\AssetBundle;

/**
 * Class TinyMceAsset
 * @package powerkernel\tinymce
 */
class TinyMceAsset extends AssetBundle
{
    public $sourcePath = '@vendor/tinymce/tinymce';
    public $depends = [
        'yii\bootstrap\BootstrapAsset'
    ];

    public function init()
    {
        parent::init();
        $this->js[] = YII_DEBUG ? 'tinymce.js' : 'tinymce.min.js';
    }
}