<?php
namespace app\controllers;
use yii\web\Controller;

class HttpController extends Controller{
	public function behaviors(){
		return [
			[
				'class'=>'yii\filters\HttpCache',
				// 'lastModified'=>function(){
				// 	return 1456707535240;
				// 	return filemtime('file.txt');
				// }
				// ,
				'etagSeed'=>function(){
					return 'dfkdfd';
					$fp = fopen('file.txt', 'r');
					$content = fgets($fp);
					fclose($fp);
					return $content;
				}
			]
		];
		return [];
	}
	public function actionIndex(){
		$content = file_get_contents('file.txt');
		return $this->display('index',['new'=>$content]);
		// var_dump(get_class_methods($this));
	}
}