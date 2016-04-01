<?php
namespace app\controllers;
use yii\web\Controller;
//片段缓存
class PartcacheController extends Controller{
	public function actionCache(){
		return $this->display('index');
	}
}