<?php
namespace app\models;
use yii\db\ActiveRecord;
class Test extends ActiveRecord{
	public function rules(){
		return [
			['id','integer'],
			['name','string','length'=>[2,5]]
		];
	}
}