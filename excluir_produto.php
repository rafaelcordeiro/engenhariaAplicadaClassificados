<?php
  
  include "mysql_connection.php";

  $id = $_GET["id"];

  echo $id;

  $delete = mysql_query("DELETE FROM products WHERE product_id = $id");

  if(!$delete) {
    echo "Erro ao excluir produto!";
  
  } else {
    echo "Produto excluido com sucesso!";
  }
  mysql_close();
  
?>
