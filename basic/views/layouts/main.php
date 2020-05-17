<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;

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
            'class' => 'navbar-fixed-top navbar-expand-lg navbar-dark bg-dark',
        ],
    ]);

    try {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto'],
            'items' => [
                ['label' => 'Anasayfa', 'url' => ['/site/index']],
                ['label' => 'Kulüpler', 'url' => ['/site/about']],
                ['label' => 'İstatistikler', 'url' => ['/site/contact']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Giriş yap', 'url' => ['/site/login']]
                ) : (
                        ['label' => 'Çıkış yap ('.Yii::$app->user->identity->username.')',
                            'url' => ['site/logout'],
                            'linkOptions' => [
                                'data-method' => 'post'
                            ]
                        ]
                )
            ],
        ]);
    } catch (Exception $e) {
    }
    NavBar::end();
    ?>

    <?php echo $content ?>


</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
