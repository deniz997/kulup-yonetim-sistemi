<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 18.05.2020
 * Time: 16:39
 */

namespace app\controllers;


use yii\web\Controller;

class KulupController extends Controller
{
    public $layout = 'dashboard';

    public function actionIndex()
    {
        return $this->render('kulup');
    }

    public function actionProfile()
    {
        return $this->render('profile');
    }

    public function actionEtkinlikler()
    {
        return $this->render('etkinlikler');
    }

    public function actionIstatistikler()
    {
        return $this->render('istatistikler');
    }
}