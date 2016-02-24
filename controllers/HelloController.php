<?php
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

class HelloController extends Controller{
	public function actionIndex(){
		$res = \YII::$app->response;
		// $res->statusCode = '404';
		// $res->headers->add('pragma','no-cache');
		// $res->headers->set('pragmas','max-age=5');
		//文件下载
		// $res->headers->add('content-disposition','attchment;filename="t.txt"');
		// $res->sendFile('./robots.txt');
		// echo 'hello world';
		// $req = \YII::$app->request;
		// echo $req->get('id');
		//跳转
		// $res->headers->add('location','http://www.baidu.com');
		// $this->redirect('http://www.baidu.com');
	}
	public function actionSession(){
		$s = \YII::$app->session;
		$s->open();
		if($s->isActive){
			echo 'session is active';
		}
		echo $s->set('user','李四');
		echo $s->get('user');
		$s->remove('user');

		echo $s['user'] = 'hi';
		var_dump($s);
	}
	public function actionCookie(){
		echo 'cookie';
		$c = \YII::$app->response->cookies;
		$c_data = array('name'=>'hello','value'=>'kdfk');
		$c->add(new Cookie($c_data));
		//remove cookie
		$c->remove('hello');
	}
}