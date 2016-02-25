<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<h1 style="color:red">hello world</h1>

<h3><?=Html::encode($str1);?></h3>
<h3><?=HtmlPurifier::process($str1);?></h3>
<h5><?php var_dump($arr);?></h5>