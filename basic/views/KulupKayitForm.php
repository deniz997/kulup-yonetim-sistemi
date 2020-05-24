<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KulupUyeler */
/* @var $form ActiveForm */
?>
<div class="KulupKayitForm">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kulup_id') ?>
    <?= $form->field($model, 'ogrenci_id') ?>
    <?= $form->field($model, 'is_approved') ?>
    <?= $form->field($model, 'ogr_role') ?>
    <?= $form->field($model, 'ayrilma_sebebi') ?>
    <?= $form->field($model, 'uyelik_tarihi') ?>
    <?= $form->field($model, 'uyelik_tarihi_bitis') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- KulupKayitForm -->
