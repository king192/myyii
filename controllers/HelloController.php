<?php
namespace app\controllers;
use yii\web\Controller;

class HelloController extends Controller{
	public function actionIndex(){
		$res = \YII::$app->response;
		// $res->statusCode = '404';
		// $res->headers->add('pragma','no-cache');
		// $res->headers->set('pragmas','max-age=5');
		//文件下载
		// $res->headers->add('content-disposition','attchment;filename="t.txt"');
		$res->sendFile('./robots.txt');
		// echo 'hello world';
		// $req = \YII::$app->request;
		// echo $req->get('id');
	}
}