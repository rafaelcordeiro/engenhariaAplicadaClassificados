<?php
 
 include("security.php");
session_start();
 
if (!isset($_REQUEST['logout'])){
 
    echo "Voc� realmente deseja sair da �rea restrita?<br />";
    echo "<a href=\"logout.php?logout\">Sim</a> | ";
    echo "<a href=\"javascript:history.go(-1)\">N�o</a>";
 
}else{
	echo "At� logo " .$_SESSION['userName'];
	endSession();
	
	
}
   
?>