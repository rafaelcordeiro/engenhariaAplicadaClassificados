<?php

$database['server'] = 'localhost';
$database['user'] = 'dev';
$database['passwd'] = 'esa20121';
$database['database_name'] = 'esa_class';

$database_connection = mysql_connect($database['server'], $database['user'], $database['passwd']) or die("Nao Foi Possivel Conectar ao Banco de Dados");
if (!$database_connection)
	die ("Erro de conexão com o Banco de Dados : ".mysql_error());
mysql_select_db($database['database_name'],$database_connection) or die("Nao Foi Possivel Conectar ao Banco de Dados");



?>