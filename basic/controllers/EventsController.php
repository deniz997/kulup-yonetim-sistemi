<?php


namespace app\controllers;


use yii\web\Controller;

class EventsController extends Controller
{
    public $layout = 'dashboard';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEvent()
    {
        $this->layout = 'main';
        return $this->render('event');
    }
}