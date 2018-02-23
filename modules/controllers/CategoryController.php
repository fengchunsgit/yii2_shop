<?php

namespace app\modules\controllers;
use app\models\Category;
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
    $model=new Category();
    $list=$model->getOptions();
    $list[0]='添加顶级分类';
    if(Yii::$app->request->isPost){
      $post=Yii::$app->request->post();
      if($model->add($post)){
        Yii::$app->session->setFlash('info','添加成功');
      }
    }
    return $this->render("add",['list'=>$list,'model'=>$model]);
  }
}
