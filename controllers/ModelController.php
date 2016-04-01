<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Test;
use app\models\Customer;
use app\models\Orders;

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
	public function actionDel(){
		//删除id为1的记录
		// $res = Test::find()->where(['id'=>1])->all();
		// $res[0]->delete();
		//删除id>0所有数据
		Test::deleteAll('id>:id',array(':id'=>0));


	}
	public function actionSave(){
		$test = new Test;
		$test->name = 'kdfjfjfjfjfjfj';
		$test->validate();
		if($test->hasErrors()){
			echo 'something error';
			exit;
		}
		$test->save();
	}
	public function actionSave1(){
		$test = Test::find()->where(['id'=>4])->one();
		$test->name = 'hel';
		echo $test->save();
	}
	//关联查询
	public function actionRelate(){
		//根据用户查询所有订单
		$customer = Customer::find()->where(['name'=>'zhangsan'])->one();
		// print_r($customer);
		$orders = $customer->hasMany(Orders::className(),['customer_id'=>'id'])->asArray()->all();
		print_r($orders);
	}
	public function actionRelate1(){
		$customer = Customer::find()->where(['name'=>'zhangsan'])->one();
		$orders = $customer->getOrders();
		print_r($orders);

	}
	public function actionRelate2(){
		$customer = Customer::find()->where(['name'=>'zhangsan'])->one();
		$orders = $customer->order;
		print_r($orders);
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