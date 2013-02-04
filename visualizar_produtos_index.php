<?php
require_once("mysql_connection.php");

$request = mysql_query("SELECT * FROM products;");

?>
<?php

while($l = mysql_fetch_array($request)) {
        $title          = $l["title"];
        $description    = $l["description"];
        $price          = $l["value"];
	     $id             = $l["product_id"];
	     $foto1          = $l["foto1"];
#	echo "
#        <tr>
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
    <td width=\"222\" height=\"38\"><img width=\"190\" height=\"150\" src=\"fotos_produtos/$foto1\" alt=\"Foto de exibição\" /><br /></td>
    <td width=\"23\" bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td width=\"222\" height=\"38\"><h1>$title</h1></td>
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
    <td height=\"70\"><a href=\"ver_produto.php?id=$id\"><img src=\"images/visualizar.png\"></a></td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
</table>
</div>\n";

}       
mysql_close();
?>      
</table>

