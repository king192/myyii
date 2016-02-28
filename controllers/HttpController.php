<?php
namespace app\controllers;
use yii\web\Controller;

class HttpController extends Controller{
<<<<<<< HEAD
	public function _init(){
		echo '1';
=======
	public function behaviors(){
		echo '2';
>>>>>>> 9fb47400e71e0cd9fcb7e1cfeeed3daf9243a837
	}
	public function actionIndex(){
		return $this->diaplay('index');
		// var_dump(get_class_methods($this));
	}
}