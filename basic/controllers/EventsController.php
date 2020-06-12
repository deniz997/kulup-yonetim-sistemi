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

    public function actionEvent($id)
    {
        $this->layout = 'main';
        $etkinlik = Etkinlik::find()->where('id=:id', [
            ':id' => $id
        ])->one();
        return $this->render('event',
            ['model' => $etkinlik]);
    }

    public function actionNewEvent()
    {
        $etkinlik = new Etkinlik();
        return $this->render('newEtkinlik',
            ['model' => $etkinlik]);
    }
}