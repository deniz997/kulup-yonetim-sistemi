<?php


namespace app\controllers;


use app\models\Etkinlik;
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

    public function actionNewEvent()
    {
        $etkinlik = new Etkinlik();
        return $this->render('newEtkinlik',
            ['model' => $etkinlik]);
    }
}