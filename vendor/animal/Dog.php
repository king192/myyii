<?php
namespace vendor\animal;
use app\behaviors\behavior1;
use yii\base\Component;
//一个类里如果想要使用行为里的属性或方法需要继承component
class Dog extends Component{
	public function behaviors(){
		return [
			Behavior1::className()
		];
	}
	public function look(){
		echo 'I am looking!<br>';
	}
}