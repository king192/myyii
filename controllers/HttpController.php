<?php
namespace app\controllers;
use yii\web\Controller;

class HttpController extends Controller{
	public function _init(){
		echo '1';
	}
	public function actionIndex(){
		return $this->diaplay('index');
		// var_dump(get_class_methods($this));
	}
}