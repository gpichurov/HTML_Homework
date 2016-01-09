<?php 
	require_once 'functions.php';
	$text = get_value($_POST, 'text');
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
				<label>Enter Text</label>
				<textarea rows="10" cols="30" name="text"></textarea>
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
		
		<?php echo htmlentities($text)?>
	</body>
</html>