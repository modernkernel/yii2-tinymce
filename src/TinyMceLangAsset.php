<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace powerkernel\tinymce;

use yii\web\AssetBundle;

/**
 * Class TinyMceLangAsset
 * @package powerkernel\tinymce
 */
class TinyMceLangAsset extends AssetBundle
{
    public $sourcePath = '@vendor/powerkernel/yii2-tinymce/src/assets';

    public $depends = [
        'powerkernel\tinymce\TinyMceAsset'
    ];
}
