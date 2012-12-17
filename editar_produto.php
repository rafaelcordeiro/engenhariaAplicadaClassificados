<?php

include 'mysql_connection.php';
	
	$id = $_GET["id"];

$request = mysql_query("SELECT * FROM products WHERE product_id='$id';");

while($l = mysql_fetch_array($request)) {
        $title          = $l["title"];
        $description    = $l["description"];
        $price          = $l["value"];

	
	
}

echo'
	
	<form name="editar_produto" action="atualizar_produto.php" method="post" onsubmit="return validarCamposUsuario(); return false;">
		<tr>
			<INPUT Type="hidden" Name="id" Value="'.$id.'">
			
			<td width="69">Título:</td>
			<td width="546"><input name= "title" type="text" id="title" size="70" maxlength="60" value="'.$title.'" />
			<br/>
    
			<td>Descrição:</td>
			<td><input name= "description" type="text"  id="description" size="70" maxlength="300" value="'.$description.'" />
		
			<br/>
	 
			<td>Valor:</td>
			<td><input name = "price" type="text" id="price" size="10" maxlength="30" value ="'.$price.'" />
    
			<br/>
		
			<td>Imagem:</td>
			<td><input type="file" name="foto_filme" size="50"></td>
			<br/>
	  
			<td colspan="2"><p>
			<input name="editar" type="submit" id="editar" value="editar" /> 
        

			<input name="limpar" type="reset" id="limpar" value="Limpar" />
         
			</td>
		</tr>
	</form>';
mysql_close();

?>