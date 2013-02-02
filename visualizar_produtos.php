<?php 

require_once("security.php");
protegePagina();

$owner = $_SESSION['userEmail'];
echo "<table width=\"257\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
  <tr align=\"left\">
    <td>Logado como: $owner</td>
  </tr>
</table>";

$request = mysql_query("SELECT * FROM products WHERE owner='$owner';");

//if(empty($request)) {
//	echo"Você ainda não cadastrou nenhum produto";
//	echo"<a href=\"cadastro_de_produtos.html\">Cadastrar Produto</a> ";
//}
while($l = mysql_fetch_array($request)) {
        $title          = $l["title"];
        $description    = $l["description"];
        $price          = $l["value"];
	     $id             = $l["product_id"];
#	echo "
#        <tr>
#                <td><a href=\"editar_produto.php?id=$id\">[Editar]</a> <a href=\"excluir_produto.php?id=$id\">[Excluir]</a></td>
#                <td> $title</td>         
#                <td> $description</td>
#                <td> R$ $price</td>
#
#        </tr>\n";

echo "<div style=\"float:left; background-color:white;\">
<table width=\"245\" height=\"222\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
    <tr>
    <td width=\"222\" height=\"38\" bgcolor=\"#ffe\"><br /></td>
    <td width=\"23\" bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td width=\"222\" height=\"38\" align=\"center\"><b>$title</b></td>
    <td width=\"23\" bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td>$description</td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td>R$ $price</td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td height=\"70\"><table width=\"100\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
            <tr>
              <td width=\"51\" height=\"35\"><a href=\"edicao_produto.php?id=$id\"><img src=\"images/document_edit.png\" alt=\"Editar\" width=\"32\" height=\"32\" /></a></td>
              <td width=\"49\"><a href=\"excluir_produto.php?id=$id\"><img src=\"images/trash-can-delete.png\" width=\"32\" height=\"32\" /></a></td>
            </tr>
          </table></td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
</table>
</div>\n";

}   
    
mysql_close();
?>      