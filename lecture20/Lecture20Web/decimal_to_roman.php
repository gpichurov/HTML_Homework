<?php
ini_set('display_errors', 'On');

function decimalToRoman($decimal) {
	$roman = '';
	while ($decimal >= 1000) {
		$roman .= 'M';
		$decimal -= 1000;
	}
	
	if ($decimal >= 900) {
		$roman .= 'CM';
		$decimal -= 900;
	}
	
	while ($decimal < 900 && $decimal >= 600) {
		$roman .= 'C';
		$decimal -= 100;
	}
	
	if ($decimal >= 500) {
		$roman .= 'D';
		$decimal -= 500;
	}
	
	if ($decimal >= 400) {
		$roman .= 'CD';
		$decimal -= 400;
	}
	
	while ($decimal >= 100) {
		$roman .= 'C';
		$decimal -= 100;
	}
	
	if ($decimal >= 90) {
		$roman .= 'XC';
		$decimal -= 90;
	}
	
	while ($decimal < 90 && $decimal >= 60) {
		$roman .= 'X';
		$decimal -= 10;
	}
	
	
	if ($decimal >= 50) {
		$roman .= 'L';
		$decimal -= 50;
	}
	
	if ($decimal >= 40) {
		$roman .= 'XL';
		$decimal -= 40;
	}
	
	while ($decimal < 40 && $decimal >= 10) {
		$roman .= 'X';
		$decimal -= 10;
	}
	
	if ($decimal == 9) {
		$roman .= 'IX';
	}
	
	while ($decimal < 9 && $decimal > 5) {
		$roman .= 'I';
		$decimal -= 1;
	}
	
	if ($decimal == 5) {
		$roman .= 'V';
		$decimal -= 5;
	}
	
	if ($decimal == 4) {
		$roman .= 'IV';
		$decimal -= 4;
	}
	
	while ($decimal < 4 && $decimal > 0) {
		$roman .= 'I';
		$decimal -= 1;
	}
	
	return $roman;
}

$number = '';
$message = '';

if (!empty($_POST['number'])) {
	$number = $_POST['number'];
}

if (!is_numeric($number)) {
	$message = 'Enter a number';
} else {
	$message = $number . ' in roman numerals is ' . decimalToRoman($number);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Decimal to arabic</title>
</head>
<body>
	<form action="" method="post">
		<div>
			<label for="number">Enter Number</label>
			<input type="text" name="number" id="number" value="<?= htmlentities($number) ?>"/>
		</div>
		<div>
			<input type="submit" value="Calculate"> 
		</div>
	</form>

<?= $message ?>
</body>
</html>