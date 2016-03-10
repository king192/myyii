<?php

namespace app\modules\article;

class Article extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\article\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
        //配置子模块
        $this -> modules = [
        	'cate' => [
	            'class' => 'app\modules\article\modules\cate\Cate',
	        ],
        ];
    }
}
