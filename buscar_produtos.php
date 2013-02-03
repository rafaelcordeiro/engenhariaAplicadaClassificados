
<?php require_once 'mysql_connection.php'; ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Busca de Produtos - Classificados UFPB</title>
</head>
<script language="JavaScript" src="scripts.js"></script>
<body>
<form name="frmBusca" method="post"  action="<?php echo $_SERVER['PHP_SELF'] ?>?nome=buscar" onsubmit="return valida_busca_produto();" >
	<input type="radio" name="tipo" value="title">Buscar por nome 
	<input type="radio" name="tipo" value="description">Buscar por descrição<br>
	<select name="faixaDePreco">
		<option value="nenhuma">Nenhuma</option>	
		<option value="ate100">Até R$100,00</option>
		<option value="101ate500">De R$101,00 à R$500,00</option>
		<option value="501ate1000">De R$501,00 à R$1000,00</option>
		<option value="acimade1000">Acima de R$1000,00</option>
	</select> Faixa de Preço <br>
	<input type="text" name="product_name" />
   <input type="submit" value="Buscar" />
</form>



<?php

 
// Recuperamos a ação enviada pelo formulário
$a = $_GET['nome'];
 
// Verificamos se a ação é de busca
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
		// Exibe os produtos e seus respectivos preços
		while ($produto = mysql_fetch_object($sql)) {
			if($produto->value>=$min and $produto->value<=$max){
				echo $produto->title . " <br>Descrição: $produto->description" . "<br>Preço: R$ ".$produto->value." <br />";
			}
		}
	// Se não houver registros
	} else {
		echo "Nenhum produto foi encontrado com o nome ".$palavra."";
	}
}
?>

 </body>
</html>
