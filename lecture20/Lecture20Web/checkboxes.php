<?php 
	require_once 'functions.php';
	foreach (get_value($_POST, 'color', []) as $key => $value) {
		var_dump($key, $value);
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
	<body>
		<form action="" method="post">
		<p>Which colors do you like</p>
			<div>
				<label>Red <input type="checkbox" name="color[]" value="red"></label>
				<label>Green <input type="checkbox" name="color[]" value="green"></label>
				<label>Yello <input type="checkbox" name="color[]" value="yello"></label>
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
	</body>
</html>