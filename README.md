# TinyMCE Widget for Yii2
forked from 2amigos/yii2-tinymce-widget

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require powerkernel/yii2-tinymce "*"
```
or add

```
"powerkernel/yii2-tinymce": "*"
```

to the require section of your application's `composer.json` file.

## Usage


```
use powerkernel\tinymce\TinyMce;

<?= $form->field($model, 'text')->widget(TinyMce::className(), []);?>
```

## Custom Options
```
<?= $form->field($model, 'text')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    'clientOptions' => [
        'height'=>320,
        'menubar'=> true,
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste image"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | removeformat code"
    ]    
]);?>
```
