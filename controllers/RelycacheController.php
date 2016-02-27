<?php
namespace app\controllers;
use yii\web\Controller;
/*
Cache Dependencies
*/
class RelycacheController extends Controller{
	protected $cache;
	public function _init(){
		$this->cache = \YII::$app->cache;
	}
	//表达式依赖，获取时表达式的值和设置时的不一样则无法取出缓存，值恢复则可以取出缓存值
	public function actionExp(){
		$rely = new \yii\caching\ExpressionDependency(
			['expression'=>'\YII::$app->request->get("name")']
		);
		if(isset($_GET['dump'])){
			var_dump($this->cache->get('key2'));
		}else{
			echo $this->cache->add('key2','hello world!!!',3000,$rely);
		}
	}

	//db依赖，获取时db表达式的值和设置时的不一样则无法取出缓存，值恢复则可以取出缓存值
	public function actionSql(){
		$rely = new \yii\caching\DbDependency(
			['sql'=>'select * from yii.user where id = 1']
		);
		if(isset($_GET['dump'])){
			var_dump($this->cache->get('sql'));
		}else{
			echo $this->cache->add('sql','hello world!!!',3000,$rely);
		}
	}

	//文件依赖，文件属性等发生变化
	public function actionFile(){
		$rely = new \yii\caching\FileDependency(
			['fileName'=>'file.txt']
		);
		if(isset($_GET['dump'])){
			var_dump($this->cache->get('file'));
		}else{
			echo $this->cache->set('file','fjile!!!',3000,$rely);
		}
	}
	//

	public function actionSet(){

	}
}