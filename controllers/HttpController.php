<?php
namespace app\controllers;
use yii\web\Controller;

class HttpController extends Controller{
	public function behaviors(){
		return [
			[
				'class'=>'yii\filters\HttpCache',
				'lastModified'=>function(){
					return 1456657515184;
				}
			]
		];
	}
	public function actionIndex(){
		return $this->display('index');
		// var_dump(get_class_methods($this));
	}
}