<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 18.05.2020
 * Time: 16:39
 */

namespace app\controllers;


use app\models\Etkinlik;
use app\models\KulupInfos;
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
            'query' => KulupInfos::find(),
            'pagination' => ['pageSize' => 20,]
        ]);

        return $this->render('index', [
            'provider' => $provider,
        ]);
    }

    public function actionProfile($id)
    {

        $etkinlikProvider = new ActiveDataProvider([
            'query' => Etkinlik::find()->where('kulup_id=:id', [
                ':id' => $id
            ]),
        ]);

        $kulup = Kulupler::find()->where('id=:id', [
            ':id' => $id
        ])->one();
        return $this->render('profile', [
            'etkinlikProvider' => $etkinlikProvider,
            'kulup' => $kulup
        ]);
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