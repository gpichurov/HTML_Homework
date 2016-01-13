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
				<label>Describe Your Favorite Color</label>
				<textarea rows="10" cols="50" name="color">TEST</textarea>
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
	</body>
</html>