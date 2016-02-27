<?php
//时间缓存
$duration = 15;
//依赖缓存
$dependency = [
'class'=>'yii\caching\FileDependency',
'fileName'=>'file.txt'
];
//缓存开关
$enabled = false;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fragment dependency</title>
</head>
<body>
<?php if($this->beginCache('cachfde',['dependency'=>$dependency])){ ?>
<div id="cachfdek">这!erEEEEEEfg！！法规缓存</div>
rfkjsakfjkljlkdf<kdjfkdf>jdkfjksdj
<?php
$this->endCache();
}
?>

<?php if($this->beginCache('cachfdes',['duration'=>$duration])){ ?>
<div id="cachfdek">这!erEEEEEEfgkdsjfk当然是发生sdfdsf</div>！！！！！！！！！！复后恢复恢复恢复
<?php
$this->endCache();
}
?>

<?php if($this->beginCache('cachfdet',['enabled'=>$enabled])){ ?>
<div id="cachfdek">这!erEEEEEEfg法规缓存</div>
<?php
$this->endCache();
}
?>
<div>这里将不会被缓存gsdrtgerge</div>
</body>
</html>