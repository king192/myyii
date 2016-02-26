<?php
namespace app\models;
use yii\db\ActiveRecord;
class Customer extends ActiveRecord{
	public function getOrders(){
		return $orders = $this->hasMany(Orders::className(),['customer_id'=>'id'])->asArray()->all();
	}
	public function getOrder(){
		return $orders = $this->hasMany(Orders::className(),['customer_id'=>'id'])->asArray();
	}
}