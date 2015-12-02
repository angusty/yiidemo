<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

class Sportclub extends ActiveRecord
{

    public static function tableName()
    {
        return '{{%sportclub}}';
    }


    public function attributeLabels()
    {
        $parent = parent::attributes();

        return  [
            'clubname' => Yii::t('app', 'Clubname'),
            'indeximage' => Yii::t('app', 'Image'),
            'manager_uid' => Yii::t('app', 'Manager Uid'),
            'createtime' => Yii::t('app', 'Created At')
        ];
    }
}