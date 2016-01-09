<?php

function get_value($array, $key, $default = null) {
	return isset($array[$key]) ? $array[$key] : $default;
}


$firstName = get_value($_POST, 'firstname');
$lastname = get_value($_POST, 'lastname');
$username = get_value($_POST, 'username');
$password = get_value($_POST, 'password');

//var_dump($firstName, $lastname, $username, $password, $_POST);

if (!empty($_POST)) {
	// uncomment to relocate the browser
	//header('Location: php_and_html.php');	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php if (!empty($_POST)):?>
	<p>
		Hello <?= $firstName . ' ' . $lastname ?> your username is <?= $username?>
	</p>
	<?php endif;?>
	<div>
	
		<form action="" method="post">
			<div>
				<label for="firstname">First Name</label>
				<input type="text" name="firstname" id="firstname"/>
			</div>
			<div>
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" id="lastname" />
			</div>
			<div>
				<label for="username">User Name</label>
				<input type="text" name="username" id="username"/>
			</div>
			<div>
				<label for="password">Password</label>
				<input type="password" name="password" id="password"/>
			</div>
			<div>
				<input type="submit" />
			</div>
		
		</form>
	
	</div>
</body>
</html>