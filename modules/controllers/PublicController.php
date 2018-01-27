<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2018/1/27
 * Time: 10:04
 */

namespace app\modules\controllers;

use yii\web\Controller;
use app\modules\models\Admin;
class PublicController extends Controller
{
    public function actionLogin()
    {
        $this->layout=false;
        $model=new Admin;
        return $this->render('login',['model'=>$model]);
    }
}