<?php
 require_once("mysql_connection.php");

 $id     = $_GET["id"];

 $query  = mysql_query("SELECT * FROM products WHERE product_id = '$id';");
?>

<?php

 while($values = mysql_fetch_array($query)) {
  $title      = $values["title"];
  $description = $values["description"];
  $price       = $values["values"];
  $recommends  = $values["recommends"];
  $status      = $values["status"];
  $foto1       = $values["foto1"];
  $owner       = $values["owner"]; 
 }

 echo '<table width="700" height="275" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="53" align="center"> <h1> '.$title.' </h1></td>
  </tr>
  <tr>
    <td height="48" align="center"><img width="190" height="150" src="fotos_produtos/'.$foto1.'" alt="Foto de exibição" /></td>
  </tr>
  <tr>
    <td height="34" align="center">'.$description.'</td>
  </tr>
  <tr>
    <td height="43" align="center"><a href="recomenda_produto.php?id='.$id.'"><img src="images/recomendar.png" /></a><br /><b> '.$recommends.' recomendações</b> para esse produto. </td>
  </tr>
  <tr>
    <td height="33" align="center"><b>Status: </b>'.$status.'.</td>
  </tr>
  <tr>
    <td align="center"><b>Vendendor: </b>'.$owner.'</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table>';

?>