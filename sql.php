<?php
//sql 攻击研究
$dbname = 'yii';
$dbuser = 'root';
$dbpasswd = 'root';
$dbserver = 'localhost:3306';
$conn = mysql_connect($dbserver,$dbuser,$dbpasswd) or die('db connect fail:'.mysql_errno());
mysql_select_db($dbname);
$sql = 'select * from user where id = 2 or 1=1';
$res = mysql_query($sql,$conn);
$arr = array();
while($res1 = mysql_fetch_array($res,MYSQL_ASSOC)){
	$arr[] = $res1;
}
var_dump($arr);