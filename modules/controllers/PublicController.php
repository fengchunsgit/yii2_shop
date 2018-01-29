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
use Yii;

class PublicController extends Controller
{
    public function actionLogin()
    {
        $this->layout=false;
        $model=new Admin;
        if(Yii::$app->request->isPost){
          $post=Yii::$app->request->post();
          //var_dump($post);
          if($model->login($post)){
            $this->redirect(['default/index']);
            Yii::$app->end();
          }
        }
        return $this->render('login',['model'=>$model]);
    }
}
