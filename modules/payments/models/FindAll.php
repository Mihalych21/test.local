<?php

namespace app\modules\payments\models;


use yii\db\ActiveRecord;

class FindAll extends ActiveRecord
{
    public static function getAll()
    {
        $sql = "SELECT * FROM `payments_table`";
        $data = ActiveRecord::findBySql($sql)->asArray()->all();
        return $data;
    }
}