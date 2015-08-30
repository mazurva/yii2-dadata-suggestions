Yii2 DaData Suggestions
=======================
Подсказки DaData.ru для Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mazurva/yii2-dadata-suggestions "^0.1"
```

or add

```
"mazurva/yii2-dadata-suggestions": "^0.1"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php \mazurva\web\DaDataAsset::register($this); ?>
```

or write in `assets/AppAsset.php`

```php
public $depends = [
       ...
       'mazurva\web\DaDataAsset',
    ];
```
