<?php
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;
/*
模块调用控制器

*/
class ModulesController extends Controller{
	public function actionIndex(){
		$app = \YII::$app->getModule('article');//模块id
		$app -> runAction('default/index');
	}
}
