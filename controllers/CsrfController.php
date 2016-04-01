<?php
namespace app\controllers;

/*
防止攻击方法：
1.开启验证码
2.请求头refer
3.
*/
class CsrfController extends \yii\web\Controller{
	public function actionIndex(){}
	//yii csrf验证
	public function actionForm(){
		// echo true;
		// echo 'tttt';
		if(\YII::$app->request->isPost){
			echo \YII::$app->request->post('title');
		}else{
			$token = \YII::$app->request->getCsrfToken();
			return $this->display('form',['token'=>$token]);
		}
	}
	//yii 过滤测试,无法通过post提交
	public function actionPost(){

		if($_POST){
			var_dump($_POST);exit;
		}else{
			return $this->display('post');
		}
	}
	public function actionVar(){
		// $content = file_get_contents('file.txt');
		$content = 'hello world';
		return $this->display('index',['new'=>$content]);
		// var_dump(get_class_methods($this));
	}
}