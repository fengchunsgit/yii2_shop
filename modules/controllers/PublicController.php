<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2018/1/27
 * Time: 10:04
 */

namespace app\modules\controllers;

use yii\web\Controller;

class PublicController extends Controller
{
    public function actionLogin()
    {
        $this->layout=false;
        return $this->render('login');
    }
}