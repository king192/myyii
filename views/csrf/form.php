<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post">
		<input type="text" value="hello" name="title">
		<input type="hidden" value="<?=$token;?>" name="_csrf">
		<input type="submit" value="提交">
	</form>
</body>
</html>