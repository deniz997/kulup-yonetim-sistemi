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

//        $provider = new SqlDataProvider([
//            'sql' => "SELECT kulupler.name,
//       kulupler.acilis ,
//       kulupler.logo,
//       count(kulup_uye.kulup_id) AS \"Uye Sayisi\",
//       count(etkinlik.kulup_id) AS \"Etkinlik Sayisi\"
//        FROM ((kulupler Left JOIN kulup_uye  ON kulupler.id = kulup_uye.kulup_id)
//         Left JOIN etkinlik ON kulupler.id = etkinlik.kulup_id) WHERE kulup_uye.is_approved = TRUE GROUP BY kulupler.name, kulupler.acilis, kulupler.logo
//         "
//        ]);

        $provider = new ActiveDataProvider([
            'query' => Kulupler::find(),
            'pagination' => ['pageSize' => 9,]
        ]);

        return $this->render('index', [
            'provider' => $provider,
        ]);
    }

    public function actionProfile($id)
    {

        //Debug amacli, kulubun faaliyetlerinden birini yazdiriyor
//        var_dump( KulupFaaliyet::find()->where('kulup_id=:id',[
//            ':id' => $id
//        ])->all()[2]->faaliyet->isim);


        //Kulubun kendisini veren provider
        $kulup = Kulupler::find()->where('id=:id', [
            ':id' => $id
        ])->one();

        //Kulubun etkinliklerini veren provider
        $etkinlikProvider = new ActiveDataProvider([
            'query' => $kulup->getEtkinliks(),
        ]);

        $faaliyets = $kulup->getKulupFaaliyets()->all();
        $kulupfaaliyet = array();

        foreach ($faaliyets as $faaliyet) {
            $kulupfaaliyet[] = $faaliyet->faaliyet->isim;
        }

        //Bir faaliyet listede var mi yok mu kontrol etmenin dogru yolu
//        var_dump(in_array("Mesleki", $kulupfaaliyet, true));

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