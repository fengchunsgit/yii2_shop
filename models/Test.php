<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2018/1/25
 * Time: 23:11
 */

namespace app\models;

use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
    public static function tableName()
    {
        return "{{%admin}}";
    }
}