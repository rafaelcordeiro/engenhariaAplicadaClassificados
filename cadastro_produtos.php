<html>
<head>
<title>Cadastro de Produtos - Classificados Engenharia Aplicada</title>
</head>
<body>
<?php 

include 'mysql_connection.php';


$title= $_POST["title"];
$description= $_POST["description"];
$price= $_POST["price"];
//$pricef = floatval($price);

//inserção nas tabelas title, description e value, as respectivas variáveis
$dataInsertion = "INSERT INTO `products` ( `title` , `description` , `value`  ) VALUES ('$title', '$description', '$price')";
mysql_query($dataInsertion);

mysql_close();



echo "Seu produto foi cadastrado com sucesso! Boas Vendas!"; //cadastro realizado



?>
<br>
<a href="cadastro_de_produtos.html"> Cadastrar outro produto</a>    <a href="index.php"> Voltar ao menu</a>

</body>
</html>