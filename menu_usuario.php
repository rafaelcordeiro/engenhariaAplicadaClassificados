
<head><title>Classificados - Página Principal</title></head>
<body>

<?php

include("security.php"); 
protegePagina(); 

echo "Ol�, " . $_SESSION['userName'];



?>
<br>
<a href="cadastro_de_produtos.php"> Cadastrar Produto</a> <br>
<a href="visualizar_produtos.php"> Visualizar Produtos</a>
<br><br>
<a href="logout.php">Logout</a>



</body>

</html>