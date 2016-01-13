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
				<input type="hidden" name="color" value="none">
				<label>Red <input type="radio" name="color" value="red"></label>
				<label>Green <input type="radio" name="color" value="green"></label>
				<label>Yellow <input type="radio" name="color" value="yellow"></label>
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
	</body>
</html>