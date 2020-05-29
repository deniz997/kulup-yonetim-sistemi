<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $provider yii\data\ActiveDataProvider */


use yii\bootstrap4\LinkPager;
use yii\widgets\ListView;

$this->title = 'Kulüpler';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php echo ListView::widget([
    'dataProvider' => $provider,
    'pager' => [
        'class' => LinkPager::class,
    ],
    'itemView' => '_kulup_item',
    'layout' => '<div class="row justify-content-center">{items}</div><div class="d-flex justify-content-center">{pager}</div>',
    'itemOptions' => [
        'tag' => false
    ],

]) ?>