
<html>
<head>
</head>
<body>
	<?php
	$s1=strtolower($_GET['txt1']);
	$s2=strtolower($_GET['txt2']);
	
	
	
		if($s1==$s2)
			{
				echo "Both are same";
			}
		else
			{
				echo "Both are same/Case are not same";
			}

		
		
	?>
</body>
</html>