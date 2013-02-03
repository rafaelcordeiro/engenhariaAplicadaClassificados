<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
 include("header.php");
 include("security.php");
session_start();
 
if (!isset($_REQUEST['logout'])){
    $nome = $_SESSION['userName'];
    echo "Deseja mesmo sair ".$nome." ?<br/>";
    echo "<a href=\"logout.php?logout\">Sim</a> | ";
    echo "<a href=\"javascript:history.go(-1)\">Não</a>";
 
}else{
	echo "Até logo " .$_SESSION['userName'];
	endSession();
	
	
}
 include("footer.php");
?>