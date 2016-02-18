<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
use yii\db\Query;
use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%country}}';
    }

    public static function querySql()
    {
        $sql  = " SELECT * FROM country";
        $r =  Yii::$app->sdb->createCommand($sql)->queryAll();
        $ro = Yii::$app->db->createCommand($sql)->queryAll();
        echo '<pre>';
        echo "主库查询";
        print_r($ro);
        echo "从库查询";
        return $r;
    }


}

