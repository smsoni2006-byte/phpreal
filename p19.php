
<html>
<head>
</head>
<body>
	<?php
	$s1=$_GET['txt'];
	$s2=strpos($s1," ");

		if($s2)
		{
			echo "There is space";
		}
		
		
		else
		{
			echo "There is not space";
		}
	?>
</body>
</html>