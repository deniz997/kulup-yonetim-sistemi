<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Etkinlik */
/* @var $form ActiveForm */
//TODO: form Gii'den çıktığı gibidir. FormField'lerin amacına göre düzenlenmesi gerekir.
?>
<div class="NewEtkinlik">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kulup_id') ?>
    <?= $form->field($model, 'sonuc_raporu_yazildi_mi') ?>
    <?= $form->field($model, 'tur') ?>
    <?= $form->field($model, 'tarih') ?>
    <?= $form->field($model, 'adi') ?>
    <?= $form->field($model, 'konusu') ?>
    <?= $form->field($model, 'ortam') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- NewEtkinlik -->
