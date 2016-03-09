<?php
namespace app\controllers;
use yii\web\Controller;

class PdoController extends Controller{
	public function actionIndex(){
		$user = (new \yii\db\Query())
		->select('*')
		->from('user')
		->where('name=:name',[':name'=>'hi'])
		->all();

		print_r($user);
	}
}