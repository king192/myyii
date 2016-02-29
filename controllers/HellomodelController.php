<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Hello;

class HellomodelController extends Controller{
	public function actionIndex(){
		$m_hello = new Hello;
		$m_hello -> name = 3;//'testtt';
		// var_dump(get_class_methods($m_hello));
		$m_hello -> save();
		if($m_hello -> hasErrors()){
			var_dump($m_hello -> getErrors());
		}
	}
}