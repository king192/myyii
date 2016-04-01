<?php
namespace app\controllers;
use yii\web\Controller;

class ViewController extends Controller{
	public $layout = 'common';
	public function actionIndex(){
		echo 'hr';
		$str = 'kdfggggggggggggggkdf<script>alert(true)</script>';
		$arr = array(1,2,3);
		$data = array();
		$data['str1'] = $str;
		$data['arr'] = $arr;
		// return $this->renderPartial('index');
		return $this->display('index',$data);
	}
	public function actionRender(){
		$layout = 'about';
		return $this->render($layout);
	}
}