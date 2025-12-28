

<html>
<head>
</head>
<body>
	<?php
		$a=$_GET['txt'];
		if($a>=1 && $a<=10 && $a%2==0)
			{
				echo "Correct even";
			}
		elseif($a>=1 && $a<=10 && $a%2!==0)
			{
				echo "Correct odd";
			}
		else
			{
				echo "Incorrect";
			}
		
	?>
</body>
</html>