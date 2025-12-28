<html>
<head>
</head>
<body>
<?php

$a=$_GET['txt'];
$n=strlen($a);

if($n==5)
	echo "$a";
if($n<5)
	echo "write more then 5 character";

?>
</body>
</html>