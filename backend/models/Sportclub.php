<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Sportclub model
 *
 * @property integer $cid
 */
class Sportclub extends ActiveRecord
{
    private $indeximage_label;
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

    public function getIndeximageLabel()
    {
        $img = ['image' => 'image', 'png' => 'png', 'jpg' => 'jpg'];
        $this->indeximage_label = $img[ltrim(strrchr($this->indeximage, '.'), '.')];
        return $this->indeximage_label;
    }
}
