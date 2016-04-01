<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>common</h1>
<?php if(isset($this->blocks['block1'])):?>
	<?=$this->blocks['block1'];?>
<?php else:?>
	<div>no block</div>
<?php endif;?>
<?=$content;?>
</body>
</html>