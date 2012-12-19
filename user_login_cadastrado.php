<?php include("header.php")?>
  <table width="806" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="378" height="559"><p style="font-weight: bold"><?php include("cadastro_usuarios.php")?>&nbsp;</p>
        <table width="278" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="278" align="center"><h1>Já é cadastrado?</h1></td>
          </tr>
          <tr>
            <td height="208"><form name="login_usuario" action="valida_login.php" method="post" onsubmit="return validarCamposLoginUsuario(); return false;">
              <table width="278" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="56" height="23">Email:</td>
                  <td width="206"><label>
                    <input type="text" name="email" id="email" />
                  </label></td>
                </tr>
                <tr>
                  <td height="23">Senha:</td>
                  <td><input type="password" name="password" id="password" /></td>
                </tr>
                <tr>
                  <td height="23">&nbsp;</td>
                  <td><label>
                    <input type="image" src="images/ok.jpg" name="entrar" id="entrar" value="entrar" />
                  </label></td>
                </tr>
                <tr>
                  <td height="23">&nbsp;</td>
                  <td><a href="#">Esqueceu sua senha?</a></td>
                </tr>
              </table>
                        </form>
            <p><br />
            </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p></td>
          </tr>
        </table>
        <p><br />
          <br />
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p></td>
      <td width="428" valign="top"><table width="347" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="47" height="186" align="left"><img src="images/tracohorizontal.jpg" width="1" height="300" /></td>
          <td width="300" valign="top"><table width="291" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><img src="images/cadastrese.png" width="300" height="200" /></td>
            </tr>
            <tr>
              <td><form name="cadastro_usuario" action="user_login_cadastrado.php" method="post" onsubmit="return validarCamposUsuario(); return false;">
                <table width="291" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="80" height="23">Nome:</td>
                    <td width="211"><input type="text" name="nome" id="nome" /></td>
                  </tr>
                  <tr>
                    <td height="23">Email:</td>
                    <td><input type="text" name="email" id="email" /></td>
                  </tr>
                  <tr>
                    <td height="23">Senha:</td>
                    <td><input type="password" name="password" id="password" /></td>
                  </tr>
                  <tr>
                    <td height="23">Conf. Senha:</td>
                    <td><input type="password" name="password_confirm" id="password_confirm" /></td>
                  </tr>
                  <tr>
                    <td height="23">&nbsp;</td>
                    <td><input type="image" src="images/ok.jpg" name="entrar2" id="entrar2" value="entrar" /></td>
                  </tr>
                </table>
                            </form>
              </td>
            </tr>
            
          </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <?php include("footer.php")?>