<?php

/* @var $this View */

/* @var $content string */

use app\assets\AppAsset;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Html;
use yii\web\View;

//Main layout ana layouttur ve full-width özelliğindedir.
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
                ['label' => 'Kulüpler', 'url' => ['/kulup/index']],
                ['label' => 'İstatistikler', 'url' => ['/site/istatistikler']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Giriş yap', 'url' => ['/site/login']]
                ) : (

                ['label' => ucfirst(Yii::$app->user->identity->username),
                    'items' => [['label' => 'Kulüplerim', 'url' => '/kayitli-kulupler'],
                        ['label' => Html::tag('div', '<div class="float-left"><p class="float-left my-auto">Bildirimler</p></div><div class="rounded ml-auto bg-danger text-white"><small><h9 class="my-auto px-1">10</h9></small></div>', ['class' => 'd-flex my-auto']), 'url' => '/user/notifications',],
                        ['label' => 'Çıkış yap',
                            'url' => ['site/logout'],
                            'linkOptions' => [
                                'data-method' => 'post'
                            ]]
                    ],
                ]
                )
            ],
            'encodeLabels' => false
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