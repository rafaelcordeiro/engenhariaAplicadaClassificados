<?php include("header.php")?>
  <p>
    <?php require_once 'mysql_connection.php'; ?>
      <br />
  </p>
  <table width="334" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="248" height="81" align="center"><h1>Busca por produtos:</h1>
</td>
  </tr>
  <tr>
    <td height="81"><form name="frmBusca" method="post"  action="<?php echo $_SERVER['PHP_SELF'] ?>?nome=buscar" onSubmit="return valida_busca_produto();" >
	<input type="radio" name="tipo" value="title">Buscar por nome 
	<input type="radio" name="tipo" value="description">Buscar por descrição<br>
	<select name="faixaDePreco">
		<option value="nenhuma">Nenhuma</option>	
		<option value="ate100">AtÃ© R$100,00</option>
		<option value="101ate500">De R$101,00 Ã  R$500,00</option>
		<option value="501ate1000">De R$501,00 Ã  R$1000,00</option>
		<option value="acimade1000">Acima de R$1000,00</option>
	</select> Faixa de Preço <br>
	<input type="text" name="product_name" />
   <input type="submit" value="Buscar" />
</form>&nbsp;</td>
  </tr>
</table>

  <p>
    <?php

 
// Recuperamos a aÃ§Ã£o enviada pelo formulÃ¡rio
$a = $_GET['nome'];
 
// Verificamos se a aÃ§Ã£o Ã© de busca
if ($a == "buscar") {
 
	// Pegamos a palavra
	$palavra = trim($_POST['product_name']);
	$tipoDaPesquisa = ($_POST['tipo']);
	$faixaDePreco = ($_POST['faixaDePreco']);
	//echo($faixaDePreco);
	
	if($faixaDePreco == "nenhuma"){
		$min=0;
		$max=10000;
	}elseif($faixaDePreco=="ate100"){
		$min=0;
		$max=100;
	}elseif($faixaDePreco=="101ate500"){
		$min=101;
		$max=500;		
	}elseif($faixaDePreco=="501ate1000"){
		$min=501;
		$max=1000;
	}else{
		$min=1001;
		$max=10000;
	}	
	
	// Verificamos no banco de dados produtos equivalente a palavra digitada
	$sql = mysql_query("SELECT * FROM products WHERE ".$tipoDaPesquisa." LIKE '%".$palavra."%' ORDER BY title;");
   
	// Descobrimos o total de registros encontrados
	$numRegistros = mysql_num_rows($sql);
 
	// Se houver pelo menos um registro, exibe-o
	if ($numRegistros != 0) {
		// Exibe os produtos e seus respectivos preÃ§os
		while ($produto = mysql_fetch_object($sql)) {
			if($produto->value>=$min and $produto->value<=$max){
				echo "<div style=\"float:left; background-color:white;\">
<table width=\"245\" height=\"222\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
    <tr>
    <td width=\"222\" height=\"38\" bgcolor=\"#ffe\"><br /></td>
    <td width=\"23\" bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td width=\"222\" height=\"38\"><img width=\"190\" height=\"150\" src=\"fotos_produtos/$produto->foto1\" alt=\"Foto de exibição\" /><br /></td>
    <td width=\"23\" bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td width=\"222\" height=\"38\"><h1>$produto->title</h1></td>
    <td width=\"23\" bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td>$produto->description</td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td>R$ $produto->value</td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
  <tr>
    <td height=\"70\"><a href=\"ver_produto.php?id=$produto->product_id\"><img src=\"images/visualizar.png\"></a></td>
    <td bgcolor=\"#ffe\">&nbsp;</td>
    </tr>
</table>
</div>\n";
			}
		}
	// Se nÃ£o houver registros
	} else {
		echo "Nenhum produto foi encontrado com o nome ".$palavra."";
	}
}
?>
  </p>
  <p>&nbsp;    </p>
  <?php include("footer.php")?>