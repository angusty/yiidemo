<?php
namespace backend\models;

use yii\data\ActiveDataProvider;

class SportclubSeach extends Sportclub
{

    public function rules()
    {
        return [
            [['cid', 'manager_uid'], 'integer'],
            [['clubname', 'indeximage'],'safe'],
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
        $query->joinWith();
        $query->andFilterWhere(
            [
                'cid' => $this->cid,
                'manager_uid' => $this->manager_uid,
            ]
        );
        $query->andFilterWhere(['like', 'indeximage', $this->indeximage]);
        $query->andFilterWhere(['like', 'clubname', $this->clubname]);
        $query->andFilterWhere(['>=', 'createtime', strtotime($this->createtime)]);

        return $data_provider;

    }
}