<html>
<head>
</head>
<body>
	<?php
		$a=$_GET['txt'];
	if($a<=10 && $a>=1)
	{
		echo "in bitween1 to 10";
	}
	elseif($a<=20 && $a>=11)
	{
		echo "in bitween 11 to 20";
	}
	elseif($a<=30 && $a>=11)
	{
		echo "in bitween 21 to 30";
	}
	else
	{
		echo "Above 30 not in range";
	}
	?>
</body>
</html>