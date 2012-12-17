<?php
 
 include("security.php");
session_start();
 
if (!isset($_REQUEST['logout'])){
 
    echo "Você realmente deseja sair da área restrita?<br />";
    echo "<a href=\"logout.php?logout\">Sim</a> | ";
    echo "<a href=\"javascript:history.go(-1)\">Não</a>";
 
}else{
	echo "Até logo " .$_SESSION['userName'];
	endSession();
	
	
}
   
?>