<?php
include("mysql_connection.php");

$request = mysql_query("SELECT * FROM products;");

?>
<?php

while($l = mysql_fetch_array($request)) {
        $title          = $l["title"];
        $description    = $l["description"];
        $price          = $l["value"];
	     $id             = $l["product_id"];
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
    <td width=\"222\" height=\"38\">$title</td>
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
    <td height=\"70\">Negociar</td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
</table>
</div>\n";

}       
mysql_close();
?>      
</table>

