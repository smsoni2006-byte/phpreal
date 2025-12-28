
<html>
<head>
</head>
<body>
	<?php
	$s1=$_GET['txt'];
	$s2=substr($s1,0,1);

		if($s2=='A')
		{
			echo "Start it A";
		}
		
		
		else
		{
			echo "Not start with A";
		}
	?>
</body>
</html>