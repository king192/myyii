<?php

namespace app\controllers;

class XssController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	// \YII::$app->response->headers->add('x-xss-protection',0);//告诉浏览器正常执行javascript
    	//$s = \YII::$app->request->get('s');
    	if(isset($_GET['s'])){
        	echo $_GET['s'];
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
