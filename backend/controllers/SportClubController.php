<?php
namespace backend\controllers;

use backend\models\SportclubSeach;
use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class SportClubController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
        ];

    }

    public function actionList()
    {
        $search_model = new SportclubSeach();
        $data_provider = $search_model->search(Yii::$app->request->queryParams);
        return $this->render('list', [
            'search_model' => $search_model,
            'data_provider' => $data_provider
        ]);
    }
}
