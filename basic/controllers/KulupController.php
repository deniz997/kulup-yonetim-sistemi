<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 18.05.2020
 * Time: 16:39
 */

namespace app\controllers;


use app\models\Etkinlik;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class KulupController extends Controller
{
    public $layout = 'dashboard';

    public function actionIndex()
    {

        return $this->render('kulup');
    }

    public function actionProfile($id)
    {

        $etkinlikProvider = new ActiveDataProvider([
            'query' => Etkinlik::find()->where('id=:id', [
                ':id' => $id
            ])
        ]);
        return $this->render('profile', [
            'etkinlikProvider' => $etkinlikProvider
        ]);
    }

    public function actionEtkinlikler()
    {
        return $this->render('etkinlikler');
    }

    public function actionEtkinlik()
    {
        $this->layout = 'main';


        return $this->render('etkinlik');
    }

    public function actionIstatistikler()
    {
        return $this->render('istatistikler');
    }
}