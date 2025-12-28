
<html>
<head>
</head>
<body>
	<?php
	$s1=$_GET['txt'];
	$s2=substr($s1,-1,1);

		if($s2=='A')
		{
			echo "End it A";
		}
		
		
		else
		{
			echo "Not End with A";
		}
	?>
</body>
</html>