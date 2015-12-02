<?php
namespace backend\models;

use yii\data\ActiveDataProvider;

class SportclubSeach extends Sportclub
{

    public function rules()
    {
        return [
            [['cid', 'manager_uid'], 'integer'],
            [['clubname'],'safe'],
            ['createtime', 'date']
        ];
    }

    public function search($params)
    {
        $query = Sportclub::find();
        $data_provider = new ActiveDataProvider(
            [
                'query' => $query,
                'pagination' => [
                    'pageSize' => 10,
                ],
            ]
        );

        if (!($this->load($params) && $this->validate())) {
            return $data_provider;
        }

        $query->andFilterWhere(
            ['cid' => $this->cid]
        );

        return $data_provider;

    }
}