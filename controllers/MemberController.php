<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2018/1/27
 * Time: 0:04
 */
namespace app\controllers;
use yii\web\Controller;

class MemberController extends Controller
{
    public $layout=false;
    public function actionAuth()
    {
        return $this->render('auth');
    }
}