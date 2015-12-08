<?php
namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use yii\web\Cookie;

class TestController extends Controller
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $get = $request->get();
        if ($request->isGet) {
            var_dump($get);
        } else if ($request->isPost) {
            echo 'post';
        } else {
            echo 'other';
        }

        //跳转
        $response = Yii::$app->response;
//        $response->headers->add('location', 'http://www.sina.com');
//        $this->redirect('http://angusty.com');
        //下载
//        $response->headers->add('content-disposition', 'attachment;filename="yangbo.jpg"');
        $response->sendFile('./robots.txt');
        return 'hello';
    }

    public function actionSession()
    {
//        echo sys_get_temp_dir(), '<hr>', session_save_path();
//        phpinfo();
        $session = Yii::$app->session;
        $session->open();
        if ($session->isActive) {
            echo 'session 开启';
            $session->set('test', ['yangbo', 'test']);
        } else {
            echo 'session 关闭';
        }
        var_dump($session->get('test'));
    }

    public function actionCookie()
    {
//        $response = Yii::$app->response;
//        $cookie = $response->cookies;
//        $data = ['name' => 'yangbo', 'value' => '32'];
//        $cookie->add(new Cookie($data));
        $request = Yii::$app->request;
        $get = $request->cookies->get('yangbo');
        var_dump($get);
    }

    public function actionShow()
    {

    }
}
