<?php

  include "mysql_connection.php";
	
  $user       = $_POST["user"];
  $password   = $_POST["password"];
  $user_found = 0;
  $owner      = "";

  $users = mysql_query("SELECT * FROM user;");

  while($u = mysql_fetch_array($users)) {
      if($user == $u["name"] && $password == $u["password"]) {
        $owner = $u["name"];
        $user_found += 1;
        break;    
      }
    }

    if($user_found == 1) {
      echo "Ola $owner, bem vindo a sua pagina de administracao.";
      include "index.php";
    }
    else {
     echo "Usuario ou Senha Incorreta!";
    }
?>
