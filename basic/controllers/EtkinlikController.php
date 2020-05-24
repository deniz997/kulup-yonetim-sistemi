<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 23.05.2020
 * Time: 22:06
 */

namespace app\controllers;


class EtkinlikController
{
    public $layout = 'dashboard';

    public function actionIndex()
    {
        return $this->render('kulup');
    }

}