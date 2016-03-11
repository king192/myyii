<?php
namespace vendor\animal;

class Cat extends \yii\base\Component{
	public function shout(){
		echo 'Cat：miao miao<br>';
		// $me = new MyEvent;
		// $me -> message = 'hello my event<br>';
		//触发miao事件
		$this->trigger('miao');
	}
	public function shout1(){
		echo 'Cat：miao miao<br>';


		$me = new MyEvent;
		$me -> message = 'hello my event<br>';
		//触发miao事件

		$this->trigger('miao',$me);
	}


}