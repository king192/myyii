<?php
namespace app\controllers;
// use yii\web\Controller;
use vendor\animal\Cat;

//事件控制器示例
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
	public function actionEvent1(){
		$cat = new Cat;
		$cat2 = new Cat;
		//类级别绑定
		$mourse = new \vendor\animal\Mourse;
		//匿名函数
		\yii\base\Event::on(Cat::className(),'miao',function(){
			echo 'goods<br>';
		});
		$cat -> shout1();
		$cat2 -> shout1();

	}
	public function actionApp(){
		//绑定事件---请求完成
		\YII::$app->on(\yii\base\Application::EVENT_AFTER_REQUEST,function(){
			echo 'event after request';
		});

		echo 'request<br>';
	}
}