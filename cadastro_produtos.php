<?php 

include("security.php");
protegePagina();


$title= $_POST["title"];
$description= $_POST["description"];
$price= $_POST["price"];
$owner = $_SESSION['userEmail'];
//$pricef = floatval($price);

//inserção nas tabelas title, description e value, as respectivas variáveis
$dataInsertion = "INSERT INTO `products` ( `title` , `description` , `value` , `owner` ) VALUES ('$title', '$description', '$price' , '$owner' )";
mysql_query($dataInsertion);

mysql_close();



echo "Seu produto foi cadastrado com sucesso! Boas Vendas!"; //cadastro realizado



?>