<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2018/1/26
 * Time: 23:54
 */
namespace app\controllers;
use yii\web\Controller;

class OrderController extends Controller
{
    public function actionCheck()
    {
        return $this->renderPartial('check');
    }
}