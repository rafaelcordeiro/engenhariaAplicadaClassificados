<html>
<head>
<title>Cadastro de Produtos- Classificados Engenharia Aplicada</title>


<script language="JavaScript" src="scripts.js"></script>

<body>

<link rel="stylesheet" type="text/css" href="style.css" />

<form  name="cadastro" method="post" action="cadastro_produtos.php" onsubmit="return validarCampos(); return false;">
  <table width="625" border="0">
    <tr>
      <td width="69">Título:</td>
      <td width="546"><input name="title" type="text" id="title" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Descrição:</td>
      <td><input name="description" type="text"  id="description" size="70" maxlength="300" />
      <span class="style1">*</span></td>
    </tr>
	 <tr>
      <td>Valor:</td>
      <td><input name="price" type="text" id="price" size="10" maxlength="30" />
      <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Imagem:</td>
      <td><input type="file" name="foto_filme" size="50"></td>
	</tr>
    <tr>
      <td colspan="2"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar" /> 
        

          <input name="limpar" type="reset" id="limpar" value="Limpar" />
          

          <span class="style1">* Os campos destacados são OBRIGATÓRIOS!        </span></p>

	<p>  </p></td>
    </tr>
    


	</table>
</form>
<br>
<a href="menu_usuario.php"> Voltar ao menu</a>


</body>
</head>
</html>