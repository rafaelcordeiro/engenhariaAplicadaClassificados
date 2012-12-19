<?php include("header.php")?>
<?php include("security.php")?>
<?php protegePagina()?>
<table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="729" height="71" align="center" valign="top"><table width="738" border="0" cellspacing="0">
      <tr>
        <td width="414" height="102"><?php include("menu_usuario.php")?>          &nbsp;</td>
        <td width="414">&nbsp;</td>
      </tr>
    </table>      </td>
  </tr>
  <tr>
    <td height="62"><table width="495" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="247" height="55" align="center"><a href="cadastro_de_produtos.php"><img src="images/document_add.png" width="128" height="128" /></a><br />
          <span style="font-weight: bold"><a href="cadastro_de_produtos.php">Publicar anúncio</a></span></td>
        <td width="248" align="center"><a href="meus_anuncios.php"><img src="images/list.png" width="128" height="128" /></a><br />
          <span style="font-weight: bold"><a href="meus_anuncios.php">Meus anúncios</a></span></td>
         <td width="248" align="center"><a href="logout.php"><img src="images/exit.png" width="32" height="32" /></a><br />
          <span style="font-weight: bold"><a href="logout.php">Logout</a></span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="99">&nbsp;</td>
  </tr>
</table>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <?php include("footer.php")?>