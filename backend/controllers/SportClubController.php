<?php
namespace backend\controllers;

use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class SportClubController extends Controller
{
    public function actionList()
    {
        return $this->render('list');
    }
}
