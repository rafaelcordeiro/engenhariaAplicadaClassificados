<?php

    include 'mysql_connection.php';

    $name       = $_POST["nome"];
    $password   = $_POST["password"];
    $email      = $_POST["email"];
    $qty_users  = 0;

    $users           = mysql_query("SELECT * FROM user;");
    $insertion_query = "INSERT INTO user (name, password, email) VALUES ('$name','$password', '$email')";

    while($u = mysql_fetch_array($users)) {
      if($name == $u["name"] or $email == $u["email"]) {
        $qty_users += 1;
        break;    
      }
    }

    if($qty_users == 0) {
      mysql_query($insertion_query);
      echo "Cadastro Efetuado com Sucesso!";
      include 'index.php';
    }
    else {
     echo "Nome ou Email já existe!";
    }
	
    mysql_close();

?>
