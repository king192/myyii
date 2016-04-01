<?php
namespace app\controllers;
use yii\web\Controller;

class TimeController extends Controller{
	// public function behaviors(){
	// 	return [
	// 		[
	// 			'class'=>'yii\filters\HttpCache',
	// 			'etagSeed'=>function(){
	// 				return 'kdkdjfd';
	// 			}
	// 		]
	// 	];
	// }
	public function actionIndex(){
		echo time();
	}
}