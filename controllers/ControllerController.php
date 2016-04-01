<?php

namespace app\controllers;

class ControllerController extends \yii\web\Controller
{
    public function actionHello()
    {
        return $this->render('hello');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest()
    {
        return $this->render('test');
    }

}
