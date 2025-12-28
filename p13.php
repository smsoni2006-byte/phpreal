<html>
<head>
</head>
<body>
<?php

if (isset($_GET['cb1']) && isset($_GET['cb2']) && isset($_GET['cb3']))
	echo "you like Read,Write and Sing";
elseif (isset($_GET['cb1']) && isset($_GET['cb2']))
	echo "You like Read and Write";
elseif (isset($_GET['cb1']) && isset($_GET['cb3']))
	echo "you like Read and Sing";
elseif (isset($_GET['cb2']) && isset($_GET['cb3']))
	echo "you like Write and Sing";

elseif (isset($_GET['cb1']))
	echo "You like Read";

elseif (isset($_GET['cb2']))
	echo "You like Write";

elseif (isset($_GET['cb3']))
	echo "You like Sing";

else
	echo "not select hobby";



?>
</body>
</html>