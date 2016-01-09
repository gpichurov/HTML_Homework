<?php 
	require_once 'functions.php';
	var_dump(get_value($_POST, 'color'));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
	<body>
		<form action="" method="post">
			<div>
				<label>Enter Your Address</label>
				<input type="text" value="<?= htmlentities('"Stara planina" Str 85')?>">
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
	</body>
</html>