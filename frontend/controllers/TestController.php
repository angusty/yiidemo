<?php
namespace frontend\controllers;

use yii\web\Controller;
use Knp\Snappy\Pdf;

class TestController extends Controller
{

    public function actionIndex()
    {
        $snappy = new Pdf();
        $return = $snappy->setBinary('/usr/local/bin/wkhtmltopdf');
        var_dump($return);
        echo 'ok';
        return;
    }
}