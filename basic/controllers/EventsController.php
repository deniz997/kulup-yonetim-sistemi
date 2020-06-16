<?php


namespace app\controllers;


use app\models\Etkinlik;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class EventsController extends Controller
{
    public $layout = 'dashboard';

    public function actionIndex($id)
    {
        //Id'si verilen kulubun etkinlikleri
        $etkinlikler = new ActiveDataProvider([
            'query' => Etkinlik::find()->where('kulup_id=:id', [
                ':id' => $id
            ])
        ]);

        return $this->render('index', [
            'etkinlikler' => $etkinlikler
        ]);
    }

    public function actionEvent($id)
    {
        $this->layout = 'main';

        //Id'si verilen event
        $etkinlik = Etkinlik::find()->where('id=:id', [
            ':id' => $id
        ])->one();
        return $this->render('event',
            ['model' => $etkinlik]);
    }

    public function actionNewEvent()
    {
        //TODO etkinlik post edildikten sonra kaydedilmesi icin gereken kismi yaz
        //TODO etkinlik tablosundaki tur kismini degistir enum yerine int olacak, tur_id gibi, gerekli tablolari ac

        $etkinlik = new Etkinlik();
        return $this->render('newEtkinlik',
            ['model' => $etkinlik]);
    }
}