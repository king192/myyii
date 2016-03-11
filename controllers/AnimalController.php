<?php
namespace app\controllers;
// use yii\web\Controller;
use vendor\animal\Cat;

class AnimalController extends \yii\web\Controller{
	public function actionIndex(){
		$cat = new Cat;
		$mourse = new \vendor\animal\Mourse;
		$mourse1 = new \vendor\animal\Mourse1;
		//绑定事件
		$cat -> on('miao',[$mourse,'run']);

		$cat -> shout();
	}

	public function actionIndex1(){
		$cat = new Cat;
		$cat2 = new Cat;
		// $mourse = new \vendor\animal\Mourse;
		$mourse1 = new \vendor\animal\Mourse1;
		//绑定事件
		$cat -> on('miao',[$mourse1,'run']);
		//取消事件
		// $cat -> off('miao',[$mourse1,'run']);

		$cat -> shout1();
		$cat2 -> shout1();//木有绑定事件
	}
	public function actionEvent(){
		$cat = new Cat;
		$cat2 = new Cat;
		//类级别绑定
		$mourse = new \vendor\animal\Mourse;
		\yii\base\Event::on(Cat::className(),'miao',[$mourse,'run']);
		$cat -> shout1();
		$cat2 -> shout1();

	}
}