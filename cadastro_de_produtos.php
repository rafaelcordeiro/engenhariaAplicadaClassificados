<?php include("header.php")?>
  <table width="381" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="547" height="55" align="center"><h1> Publique seu anúncio: </h1></td>
    </tr>
  </table>
  <form  name="cadastro" method="post" action="cadastro_de_produtos_ok.php" onSubmit="return validarCampos(); return false;">
  <table width="625" border="0" align="center">
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
      <td colspan="2" align="center"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar" /> 
        

          <input name="limpar" type="reset" id="limpar" value="Limpar" />
          

          <span class="style1">* Os campos destacados são OBRIGATÓRIOS!        </span><br />
          <br />
          <br />
          <a href="menu_user.php"><img src="images/back.png" width="128" height="128" align="middle" /><br />
          Voltar ao painel</a><br />
      </p>

	<p>  </p></td>
    </tr>
    


	</table>
</form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><br>
        </p>
  <?php include("footer.php")?>