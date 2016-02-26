<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Test;

class ModelController extends Controller{
	public function actionIndex(){
		$sql = 'select * from test where id = 1';
		$res = Test::findBySql($sql)->all();
		print_r($res);
	}
}