<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Test;

class ModelController extends Controller{
	public function actionIndex(){
		$sql = 'select * from user where id = :id';
		$res = Test::findBySql($sql,array(':id'=>'1 or 1=1'))->all();
		print_r($res);
	}
	public function actionWhere(){
		//id = 1
		$where = ['id'=>1];
		//id>0
		// $where = ['>','id',0];
		//id >= 1 and id <= 4
		$where = ['between','id',1,4];
		//name like %he%
		$where = ['like','name','he'];
		// $res = Test::find()->where($where)->all();
		//查询结果转化为数组
		$res = Test::find()->where($where)->asArray()->all();
		print_r($res);
		/*批量获取数据
		*$row 每次获取数据的条数，分批获取可以减少单次内存的使用
		*/
		$row = 2;
		foreach (Test::find()->batch($row) as $res) {
			echo '本次获取了'.(count($res)).'条记录';
		}
	}
	public function actionSql(){
		$dbname = 'yii';
		$dbuser = 'root';
		$dbpasswd = 'root';
		$dbserver = 'localhost:3306';
		$conn = mysql_connect($dbserver,$dbuser,$dbpasswd) or die('db connect fail:'.mysql_errno());
		mysql_select_db($dbname);
		$sql = 'select * from user';
		$res = mysql_query($sql,$conn);
		while($res = mysql_fetch_array($res)){
			var_dump($res);
		}
	}
}