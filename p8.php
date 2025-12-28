<html>
<head>
</head>
<body>
	<?php
	$a=$_GET['txt'];
		if($a>=1 && $a<=1000 && $a%100==0)
					{
						echo "multipels";
					}
				
		else
					{
				
						echo "not multipels /not in rage";
					}
	?>
</body>
</html>