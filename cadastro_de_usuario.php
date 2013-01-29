<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="author" content="Raphael" />

	<title>Cadastro de Usuário</title>
</head>

<script language="JavaScript" src="scripts.js"></script>

<body>
    <link rel="stylesheet" type="text/css" href="style.css" />

    <form name="cadastro_usuario" action="cadastro_usuarios.php" method="post" onsubmit="return validarCamposUsuario(); return false;">
        <table>
            <tr>
                <td>Nome: </td>
                <td><input type="text" id="nome" name="nome"/></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" id="email" name="email"/></td>
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
                <td colspan="2"><p>
                <input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar" /> 
        

                <input name="limpar" type="reset" id="limpar" value="Limpar" /><br/><br/>
          

                <span class="style1">* Todos os campos são OBRIGATÓRIOS!        </span></p>

	        <p>  </p></td>
            </tr>
        </table>
    </form>
</body>
</html>
