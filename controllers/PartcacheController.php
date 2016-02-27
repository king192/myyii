<?php
namespace app\controllers;
use yii\web\Controller;

class PartcacheController extends Controller{
	public function actionCache(){
		return $this->display('index');
	}
}