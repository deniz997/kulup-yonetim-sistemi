<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 18.05.2020
 * Time: 16:39
 */

namespace app\controllers;


use app\models\Kulupler;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\web\Controller;

class KulupController extends Controller
{
    public $layout = 'dashboard';

    /**
     * Displays Kulüpler page.
     *
     * @return string
     * @throws Exception
     */

    public function actionIndex()
    {
        $this->layout = 'basic';

        /*Kulup listesi icin provider
        query = Datayi saglayan SQL query objesi
        pagination : Gosterilen her sayfanin ozelligi, ornek olarak pagesize 9 yani her bir page de 9 eleman olacak
        */
        $provider = new ActiveDataProvider([
            'query' => Kulupler::find(),
            'pagination' => ['pageSize' => 9,],
        ]);

        return $this->render('index', [
            'provider' => $provider,
        ]);
    }

    public function actionProfile($id)
    {
        //Kulubun kendisi
        $kulup = Kulupler::find()->where('id=:id', [
            ':id' => $id
        ])->one();

        //Kulubun etkinliklerini veren provider
        $etkinlikProvider = new ActiveDataProvider([
            'query' => $kulup->getEtkinliks(),
        ]);

        //Kulubun faaliyetlerini array'e kaydediyoruz.
        $faaliyets = $kulup->getKulupFaaliyets()->all();
        $kulupfaaliyet = array();

        foreach ($faaliyets as $faaliyet) {
            $kulupfaaliyet[] = $faaliyet->faaliyet->isim;
        }

        //Bir faaliyet listede var mi yok mu kontrol etmenin dogru yolu
//        var_dump(in_array("mesleki", $kulupfaaliyet, true));

        return $this->render('profile', [
            'etkinlikProvider' => $etkinlikProvider,
            'kulup' => $kulup,
            'faaliyetler' => $kulupfaaliyet
        ]);
    }


    public function actionIstatistikler()
    {
        return $this->render('istatistikler');
    }
}