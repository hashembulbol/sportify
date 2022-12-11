<?php

if(isset($_GET['id']) && isset($_GET['t'])){
	
	if($_GET['t'] == 1 ) header("location:managerHomeGYM.php?id=".$_GET['id']);
	else if($_GET['t'] ==2 ) header("location:managerHomePG.php?id=".$_GET['id']);	
}
else echo "ERROR";


?>