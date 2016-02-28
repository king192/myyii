<?php
namespace app\controllers;
use yii\web\Controller;

class HttpController extends Controller{
	public function _init(){

	}
	public function actionIndex(){
		return $this->renderPartial('index');
		var_dump(get_class_methods($this));
	}
}