<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2018/1/26
 * Time: 23:36
 */

namespace app\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->layout='layout2';
        return $this->render('index');
    }

    public function actionDetail()
    {
        $this->layout='layout2';
        return $this->render('detail');
    }

}