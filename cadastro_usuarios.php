<?php


    include 'mysql_connection.php';

    $name       = $_POST["nome"];
    $password   = $_POST["password"];
    $email      = $_POST["email"];
    $qty_users  = 0;

    $users           = mysql_query("SELECT * FROM user;");
    $insertion_query = "INSERT INTO user (name, password, email) VALUES ('$name','$password', '$email')";

    while($u = mysql_fetch_array($users)) {
      if($email == $u["email"]) {
        $qty_users += 1;
        break;    
      }
    }

    if($qty_users == 0) {
      mysql_query($insertion_query);
      echo "<spam class='cadastrado'>Parabéns! Agora você está cadadastrado.<br/>Inicie agora mesmo seus anúncios!</span>";
    }
    else {
     echo "<span class=\"emailjaexiste\">ATENÇÂO: O email já fornecido já está utilizado por outro usuário(a)!</span>";
    }
	
    mysql_close();

?>
