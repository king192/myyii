<?php

namespace app\modules\article\modules\cate\controllers;

use yii\web\Controller;
//r=article/cate/default/index
class DefaultController extends Controller
{
    public function actionIndex()
    {
    	echo 'hello cate';
        // return $this->render('index');
    }
}
