<html>
<head>
</head>
<body>
<?php
$a=$_GET['n1'];
$b=$_GET['n2'];
$sum=$a+$b;
echo "Addition: $sum";
echo "<br>";
$sub=$a-$b;
echo "Subtraction: $sub";
echo "<br>";
$mul=$a*$b;
echo "Division: $mul";
echo "<br>";
$div=$a/$b;
echo "Division: $div";
echo "<br>";
if($a %2==0)
	echo "First Number is Even";
else
	echo "First Number is Odd";
	echo "<br>";
if($b %2==0)
	echo "Second Number is Even";
else
	echo "Second Number is Odd";
	echo "<br>";
if($a %5==0)
	echo "First Number Divisible by 5";
else
	echo "First Number is Not Divisible by 5";
	echo "<br>";
if($b %5==0)
	echo "Second Number Divisible by 5";
else
	echo "Second Number is Not Divisible by 5";
	echo "<br>";
$rem=$a % $b;
echo "Reminder of $a by $b is $rem";
?>
</body>
</html>