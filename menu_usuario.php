<?php

include("security.php"); 
if (isset($_SESSION['userID']) OR isset($_SESSION['userName']) OR isset($_SESSION['userEmail'])) {
	echo "<b>Logado como: <a href=\"menu_user.php\">" .$_SESSION['userName']."</a></b> ";
}



?>