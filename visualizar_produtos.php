<?php

include("security.php");
protegePagina();

$owner = $_SESSION['userEmail'];
echo "";
echo $owner;

$request = mysql_query("SELECT * FROM products WHERE owner='$owner';");

?>

<table width="100%" border="1">
        <tr>
        			 <td>Ações</td>
                <td>Titulo</td>
                <td>Descrição</td>
                <td>Valor</td>
        </tr>
<?php
//if(empty($request)) {
//	echo"Voc� ainda n�o cadastrou nenhum produto";
//	echo"<a href=\"cadastro_de_produtos.html\">Cadastrar Produto</a> ";
//}
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
<a href="menu_usuario.php">Voltar</a>
