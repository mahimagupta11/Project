
<?php

$ch=$_POST['choice'];
echo "$ch";
if($ch=="1")
	header('Location:admin-update.php');
else if($ch=="2")
	header('Location:ownermod.php');
else
	echo "";


?>