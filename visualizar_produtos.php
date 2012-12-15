<?php

include 'mysql_connection.php';

$request = mysql_query("SELECT * FROM products;");

?>

<table width="100%" border="1">
        <tr>
        			 <td>Ações</td>
                <td>Titulo</td>
                <td>Descrição</td>
                <td>Valor</td>
        </tr>
<?php
while($l = mysql_fetch_array($request)) {
        $title          = $l["title"];
        $description    = $l["description"];
        $price          = $l["value"];
	$id             = $l["product_id"];
	echo "
        <tr>
                <td><a href=\"editar.php?id=$id\">[Editar]</a> <a href=\"excluir_produto.php?id=$id\">[Excluir]</a></td>
                <td> $title</td>         
                <td> $description</td>
                <td> R$ $price</td>

        </tr>\n";
}       
mysql_close();
?>      
</table>

<br>
<a href="index.php">Voltar</a>
