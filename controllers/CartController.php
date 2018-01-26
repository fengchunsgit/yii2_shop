<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2018/1/26
 * Time: 23:48
 */

namespace app\controllers;

use yii\web\Controller;

class CartController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

}