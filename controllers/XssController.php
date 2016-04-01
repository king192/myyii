<?php

namespace app\controllers;

/*
<img src=x onerror="alert(3);"/>
<a href="javascript:alert(true);"></a>




*/
class XssController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	\YII::$app->response->headers->add('x-xss-protection',0);//告诉浏览器正常执行javascript
    	//$s = \YII::$app->request->get('s');
    	if(isset($_GET['s'])){
        	echo $_GET['s'];
            echo "\n<br>==========<br>\n";
            //过滤标签及标签内的内容
            echo \yii\helpers\HtmlPurifier::process($_GET['s']);
            echo "\n<br>==========<br>\n";
            //编码html标签
            echo \yii\helpers\Html::encode($_GET['s']);
    	}
    }
    /*escape("&")//%26
    *url编码:http://www.runoob.com/tags/html-urlencode.html
    */

    public function actionQuot(){
    	if(isset($_GET['s'])){
        	echo $_GET['s'];
    	}
    }

}
