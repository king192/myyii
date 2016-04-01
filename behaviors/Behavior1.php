<?php
namespace app\Behaviors;
use yii\base\Behavior;

class Behavior1 extends Behavior{
	public $height;
	protected $weight;
	public function eat(){
		echo 'I eat';
	}
	public function events(){
		return [
			'wang' => 'shout'
		];
	}
	public function shout($event){
		echo 'wang wang wang<br>';
	}
}