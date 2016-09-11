<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace modernkernel\tinymce;

use yii\web\AssetBundle;

/**
 * Class TinyMceLangAsset
 * @package modernkernel\tinymce
 */
class TinyMceLangAsset extends AssetBundle
{
    public $sourcePath = '@vendor/modernkernel/yii2-tinymce/src/assets';

    public $depends = [
        'modernkernel\tinymce\TinyMceAsset'
    ];
}
