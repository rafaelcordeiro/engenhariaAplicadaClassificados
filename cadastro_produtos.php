<?php 

require_once("security.php");
protegePagina();


$title= $_POST["title"];
$description= $_POST["description"];
$price= $_POST["price"];
$owner = $_SESSION['userEmail'];
$foto1 = $_FILES["foto1"];
//$pricef = floatval($price);


// Se a foto estiver sido selecionada
if (!empty($foto1["name"])) {
 
		// Largura máxima em pixels
		$largura = 800;
		// Altura máxima em pixels
		$altura = 600;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 3000000;
 
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto1["type"])){
     	   $error[1] = "Só é permitido o envio de: jpg, png, gif e bmp";
   	 	} 
 
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto1["tmp_name"]);
 
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
 
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
 
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto1["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
 
		// Se não houver nenhum erro
		if (count($error) == 0) {
 
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto1["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos_produtos/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto1["tmp_name"], $caminho_imagem);
 
			// Insere os dados no banco
			//$sql = mysql_query("INSERT INTO `products` ( ) VALUES ( );");
 
			// Se os dados forem inseridos com sucesso
			//if ($sql){
			//	echo "A foto foi inserida com sucesso";
			//}
		}
 
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
}




//inserção nas tabelas title, description e value, as respectivas variáveis
$dataInsertion = "INSERT INTO `products` ( `title` , `description` , `value` , `owner` , `foto1`  ) VALUES ('$title', '$description', '$price' , '$owner' , '$nome_imagem' );";
mysql_query($dataInsertion);

mysql_close();



echo "Seu produto foi cadastrado com sucesso! Boas Vendas!"; //cadastro realizado



?>