<?php


namespace app\controllers;


use yii\web\Controller;

class UserController extends Controller
{
    public $layout = 'basic';

    public function actionNotifications()
    {
        return $this->render('bildirimler');
    }
}