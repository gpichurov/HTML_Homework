<?php

function get_value($array, $key, $default = null) {
	return isset($array[$key]) ? $array[$key] : $default;
}


$firstName = get_value($_POST, 'firstname');
$lastname = get_value($_POST, 'lastname');
$username = get_value($_POST, 'username');
$password = get_value($_POST, 'password');

?>
<p>
	Hello <?= $firstName . ' ' . $lastName ?> your username is <?= $username?>
</p>
<?php if ($firstName) :?>
	<p>Your first name is <?= $firstName?></p>
<?php else:?>
	<p>Please provide first name</p>
<?php endif;?>
<br>
<br>

<?php foreach ($_POST as $name => $value) :?>
	<p><?= $name ?> : <?= $value?></p>
<?php endforeach;?>

