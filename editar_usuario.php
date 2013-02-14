<?php
include 'mysql_connection.php';
require_once("security.php");
protegePagina();
  
$id      = $_SESSION['userID'];

$request = mysql_query("SELECT * FROM user WHERE id ='$id';");

while($l = mysql_fetch_array($request)) {
        $name       = $l["name"];
        $email		= $l["email"];	
}

echo '<form name="editar_usuario" action="edicao_usuario_ok.php" method="post" enctype="multipart/form-data" onsubmit="return validarCamposEditarUsuario(); return false;">
<INPUT Type="hidden" Name="id" Value="'.$id.'">
<table width="468" border="0" cellpadding="0" cellspacing="0">
   <td>Nome: </td>
                <td><input type="text" id="nome" name="nome" value="'.$name.'"/></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" id="email" name="email" value="'.$email.'"/></td>
            </tr>
            <tr>
                <td>Senha: </td>
                <td><input type="password" id="password" name="password"/></td>
            </tr>
            <tr>
                <td>Confirmar Senha: </td>
                <td><input type="password" id="password_confirm" name="password_confirm"/></td>
            </tr>
            <tr>
    <td>&nbsp;</td>
    <td><label>
      <input name="editar" type="submit" id="editar" value="Editar" /> 
    </label>    </td>
  </tr>
</table>
</form>';	

mysql_close();
?>
