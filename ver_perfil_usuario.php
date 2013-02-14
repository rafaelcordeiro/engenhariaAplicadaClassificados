<?php
require_once("header.php");
include 'mysql_connection.php';
require_once("security.php");
protegePagina();

$name  = $_SESSION['userName'];
$email = $_SESSION['userEmail'];
  
echo "<div style=\"float:left; background-color:white;\">
<table width=\"245\" height=\"240\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
    <tr>
    <td width=\"222\" height=\"38\" bgcolor=\"#ffe\"><br /></td>
    <td width=\"23\" bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td><b>Nome: $name</td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td>Email: $email</td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td height=\"70\"><a href=\"edicao_usuario.php\"><img src=\"images/visualizar.png\"></a></td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
</table>
</div>\n";
require_once("footer.php");
?>
