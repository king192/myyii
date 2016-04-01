<?php
namespace app\controllers;
use yii\web\Controller;
//页面缓存
class PagecacheController extends Controller{
	public function behaviors(){
		return [
			[
				'class'=>'yii\filters\PageCache',
				'duration'=>1000,
				'only'=>['index','test'],
				'dependency'=>[
					'class'=>'yii\caching\FileDependency',
					'fileName'=>'file.txt'
				]
			]
		];
	}
	public function actionIndex(){
		echo 2;
		// $this->display('index');
	}
	public function actionTest(){
		echo 'kdkd';
	}
	public function actionNocache(){
		echo 2;
	}
}