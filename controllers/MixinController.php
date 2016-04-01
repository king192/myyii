<?php
namespace app\controllers;
use yii\web\Controller;
use vendor\animal\Dog;

//
class MixinController extends Controller{
	public function actionIndex(){
		$dog = new Dog();
		$dog -> look();
		$dog -> eat();
		//因为不是继承关系，所以height属性如果为protected的话无法访问
		$dog -> height = 14;
		echo '<br>'.$dog -> height;
		// $dog -> weight = 100;//weight 为protected
	}
	public function actionIndex1(){
		$dog = new Dog;
		$dog -> trigger('wang');
	}
}