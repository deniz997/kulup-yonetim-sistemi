<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Kulüp Yönetim Sistemi',  /*Yii::$app->name,*/
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-fixed-top navbar-expand-lg navbar-dark bg-dark shadow-lg',
        ],
    ]);

    try {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto align-content-right text-center'],
            'items' => [
                ['label' => 'Anasayfa', 'url' => ['/site/index']],
                ['label' => 'Kulüpler', 'url' => ['/kulupler']],
                ['label' => 'İstatistikler', 'url' => ['/site/contact']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Giriş yap', 'url' => ['/site/login']]
                ) : (

                ['label' => ucfirst(Yii::$app->user->identity->username),
                    'items' => [['label' => 'Kulüplerim', 'url' => '/kayitli-kulupler'],
                        ['label' => 'Ayarlar', 'url' => '/ayarlar'],
                        ['label' => 'Çıkış yap',
                            'url' => ['site/logout'],
                            'linkOptions' => [
                                'data-method' => 'post'
                            ]]
                    ],
                ]
                )
            ],
        ]);
    } catch (Exception $e) {
    }
    NavBar::end();
    ?>

    <?php echo $content ?>


    <footer class="footer">

    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

</div>