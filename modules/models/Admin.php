<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2018/1/27
 * Time: 22:06
 */

namespace app\modules\models;
use yii\db\ActiveRecord;
class Admin extends ActiveRecord
{
    public $rememberMe=true;
    public static function tableName()
    {
        return "{{%admin}}";
    }
}
