<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-login">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="jumbotron row align-items-center h-100 ml-auto">
                                    <img src="http://3fcampus.tau.edu.tr/uploads/cms/pr.tau/5566_4_th.png">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h1 text-gray-900 mb-4">Giriş</h1>
                                    </div>

                                    <?php $form = ActiveForm::begin([
                                        'id' => 'login-form',
                                        'layout' => 'horizontal',
                                        'fieldConfig' => [
                                            'template' => "{label}\n<div class=\"container has-error\">{input}</div>\n<div class=\"mt-2 container\">{error}</div>",
                                            'labelOptions' => ['class' => 'container'],
                                            'errorOptions' => ['class' => 'help-block', 'style' => 'color:red']
                                        ],
                                        'options' => ['class' => 'user']
                                    ]); ?>

                                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                    <?= $form->field($model, 'password')->passwordInput() ?>

                                    <div class="container">
                                        <?= $form->field($model, 'rememberMe')->checkbox([
                                            'template' => "<div class=\"container\">{input} {label}</div>",
                                        ]) ?>

                                        <div class="form-group">
                                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login-button']) ?>
                                        </div>

                                        <div class="form-group">
                                            <?= Html::submitButton('<i class="fab fa-google fa-fw"></i> Login', ['class' => 'btn btn-google btn-user btn-block', 'name' => 'login-button']) ?>
                                        </div>
                                    </div>
                                    <?php ActiveForm::end(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
