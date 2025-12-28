
<html>
<head>
</head>
<body>
	<?php
	$s1=$_GET['txt'];
	$s2=strtolower($s1);

		if($s2=='m')
		{
			echo "Hello sir";
		}
		
		else if($s2=='f')
		{
			echo "Hello madam";
		}
		else
		{
			echo "please enter valid character m or f";
		}
	?>
</body>
</html>