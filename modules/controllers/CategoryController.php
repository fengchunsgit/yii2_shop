<?php

namespace app\modules\controllers;
use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{
  public function actionList()
  {
    $this->layout="layout1";
    return $this->render('cates');
  }

  public function actionAdd()
  {
    $this->layout="layout1";
    return $this->render("add");
  }
}
