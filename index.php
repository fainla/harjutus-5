<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset= utf-8">
</head>

<body>
<h2>Booleans</h2>
<?php
	$result1 = true;
	$result2 = false;
	$result3 = " ";
 	echo "Result 1: {$result1}" . "<br>";
 	echo "Result 2: {$result2}" . "<br>";
	echo "Kas result1 on boolean?" . is_bool($result1) . "<br>";
	echo "Kas result2 on boolean?" . is_bool($result2) . "<br>";
	echo "Kas result3 on boolean?" . is_bool($result3) . "<br>";
?>
<h2>Andmetüüpide olekud</h2>
<h3>NULL</h3>
<h2>NULL</h2>
<?php
	$var1 = null;
	$var2 = "";
	$var3 = 0;
	echo "var1 on null?" . is_null($var1) . "<br>";
	echo "var2 on null?" . is_null($var2) . "<br>";
	echo "var3 on null?" . is_null($var3) . "<br>";
	echo "var4 on null?" . is_null($var4) . "<br>";
?>
<h3>Set</h3>
<?php
	echo "Kas var1 on väärtustatud?" . isset($var1) . "<br>";
	echo "Kas var2 on väärtustatud?" . isset($var2) . "<br>";
	echo "Kas var3 on väärtustatud?" . isset($var3) . "<br>";
	echo "Kas var4 on väärtustatud?" . isset($var4) . "<br>";
?>
<?php $var1="" . "<br>";
			$var2="0" . "<br>";
			$var3 = 0 . "<br>";
			$var4 = 0.0 . "<br>";
			$var5= array() . "<br>";
			$var6 = null . "<br>";
			$var7 = $result2 . "<br>";
			echo "Kas var1 on empty?". empty($var1) . "<br>";
			echo "Kas var2 on empty?". empty($var2) . "<br>";
			echo "Kas var3 on empty?". empty($var3) . "<br>";
			echo "Kas var4 on empty?". empty($var4) . "<br>";
			echo "Kas var5 on empty?". empty($var5) . "<br>";
			echo "Kas var6 on empty?". empty($var6) . "<br>";
			echo "Kas var7 on empty?". empty($var7) . "<br>";
?>
<h2>Andmetüübi teisendamine</h2>
<?php 
	$count = 2;
	echo $count . "<br>";
	echo gettype($count) . "<br>";
?>
<?php 
	settype($count, "string") . "<br>";
	echo $count . "<br>";
	echo gettype($count) . "<br>";
?>

<?php 
	settype($count, "float") . "<br>";
	echo $count . "<br>";
	echo gettype($count) . "<br>";
?>
<?php 
	settype($count, "array") . "<br>";
	print_r(array($count)) . "<br>";
?>
<?php 
	settype($count, "boolean") . "<br>";
	echo $count . "<br>";
	echo gettype($count) . "<br>";
?>
<h2>konstandid</h2>
<?php
	define ("MAX_WIDTH", 980) . "<br>";
	echo MAX_WIDTH . "<br>";
?>
<?php
	define ("MAX_WIDTH", 500) . "<br>";
	echo MAX_WIDTH . "<br>";	
?>
<?php MAX_WIDTH = MAX_WIDTH + 5; ?>
</body>
</html>