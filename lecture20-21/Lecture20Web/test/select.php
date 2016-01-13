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
		<p>Which color do you like</p>
			<div>
				<label>Select Color</label>
				<select name="color">
					<option value="1">Red</option>
					<option value="2">Green</option>
					<option value="3">Yello</option>
				</select>
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
	</body>
</html>