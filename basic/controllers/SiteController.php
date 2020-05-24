<?php

namespace app\controllers;

use app\models\LoginForm;
use Yii;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{

    public $layout = 'basic';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'main';
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays Kulüpler page.
     *
     * @return string
     * @throws Exception
     */

    public function actionKulupler()
    {

        //  $db = Yii::$app->db;
        // $kulupInfos = $db->createCommand()->queryAll();


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

//        echo '<pre>';
//        var_dump($provider->getModels());
//        echo '</pre>';

        return $this->render('kulupler', [
//            'provider' => $provider
        ]);
    }
}
