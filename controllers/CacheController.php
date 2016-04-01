<?php
namespace app\controllers;
use yii\web\Controller;
use yii\web\cache;

class CacheController extends Controller{
	protected $cache;
	protected $value = null;
	protected $key = null;
	public function _init(){
		$this->cache = \YII::$app->cache;

		$this->value = isset($_GET['value'])?$_GET['value']:'hello';
		$this->key = isset($_GET['key'])?$_GET['key']:'key';
	}
	//添加缓存，如果缓存已存在则忽略
	public function actionAdd(){
		echo $this->cache->add($this->key,$this->value);
	}
	//修改或添加缓存，如果缓存已存在则覆盖
	public function actionSet(){
		echo $this->cache->set($this->key,$this->value);
	}
	//获取缓存
	public function actionGet(){
		$data = $this->cache->get($this->key);
		var_dump($data);
	}
	//删除缓存
	public function actionDel(){
		$this->cache->delete($this->key);
	}
	//清空缓存
	public function actionFlush(){
		$this->cache->flush();
	}
}