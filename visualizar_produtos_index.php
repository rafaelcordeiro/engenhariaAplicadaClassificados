<?php
include("mysql_connection.php");

$request = mysql_query("SELECT * FROM products;");

?>

<table width="100%" border="1">
        <tr>
                <td>T�tulo</td>
                <td>Descri��o</td>
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
                <td> $title</td>         
                <td> $description</td>
                <td> R$ $price</td>

        </tr>\n";
}       
mysql_close();
?>      
</table>

