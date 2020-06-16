<?php use yii\bootstrap4\LinkPager;
use yii\widgets\ListView;

/* @var $etkinlikler yii\data\ActiveDataProvider */ //ListView::Widget'ı bu dataProvider ile besliyoruz, tüm etkinlikleri
//TODO sort,filter,search Functions

?>
    <h2>Etkinliklerimiz</h2>
    <hr class="mt-0">

<?php
//Etkinlikleri listeleyen widget
echo ListView::widget([
    'dataProvider' => $etkinlikler,
    'pager' => [
        'class' => LinkPager::class,
    ],
    'itemView' => '/events/_etkinlik_item',
    'layout' => '<div class="card-deck">{items}</div><div class="d-flex justify-content-center">{pager}</div>',
    'itemOptions' => [
        'tag' => false
    ],

]) ?>