

<html>
<head>
</head>
<body>
	<?php
		$a=$_GET['txt1'];
		$b=$_GET['txt2'];
		if($a>$b)
			{
				echo "a= $a is big";
				echo "<br>";
			}
		
		else
			{
				echo "b= $b is big";
				echo "<br>";
			}
		
		if($a>0)
			{
				echo "a= $a is Positive";
				echo "<br>";
			}
		if($a<0)
			{
				echo "a= $a is Negativebig";
				echo "<br>";
			}

		if($a==0)
			{
				echo "a= $a is Zero";
				echo "<br>";
			}
		if($a==$b)
			{
				echo "a= $a is same as b= $b";
				echo "<br>";
			}

		if (!($a==$b))
			{
				echo "a= $a is not same as b= $b";
				echo "<br>";
			}
	?>
</body>
</html>