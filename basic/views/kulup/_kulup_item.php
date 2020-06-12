<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model app\models\Kulupler */

use yii\helpers\Html; ?>

<div class="card my-5 shadow-lg col-lg-3 col-xs-12 p-0 mx-3 ">
    <?php echo Html::img('@web/kuluplogolar/1.jpg', ['class' => 'card-img-top rounded-circle img-fluid w-50 mt-n5 mx-auto']) ?>
    <div class="card-body">
        <h5 class="card-title text-center font-weight-bold"><?php echo $model->name ?></h5>
        <small>
            <ul class="list-unstyled">
                <li class="d-flex pb-1">
                    <i class="fas fa-bullhorn d-sm-none d-md-none d-lg-block pr-2 my-auto"></i>
                    <p class="my-auto pr-sm-2">Açılış tarihi:</p>
                    <p class="ml-auto my-auto"><?php echo $model->acilis ?></p>
                </li>
                <li class="d-flex pb-1">
                    <i class="far fa-user d-sm-none d-md-none d-lg-block pr-2 my-auto"></i>
                    <p class="my-auto pr-sm-2">Üye Sayısı:</p>
                    <p class="ml-auto my-auto"><?php echo count($model->getKulupUyes()->all()) ?></p>
                </li>
                <li class="d-flex pb-1">
                    <i class="far fa-calendar-alt d-sm-none d-md-none d-lg-block pr-2 my-auto"></i>
                    <p class="my-auto pr-sm-2">Etkinlik Sayısı:</p>
                    <p class="ml-auto my-auto"><?php echo count($model->getEtkinliks()->all()) ?></p>
                </li>
            </ul>
        </small>
    </div>
    <a class="card-footer bg-secondary stretched-link text-decoration-none"
       href="/kulup/profile?id=<?php echo $model->id ?>">
        <div class="text-center text-white my-auto ">Kulüp sayfasına git</div>
    </a>
    </a>
</div>
