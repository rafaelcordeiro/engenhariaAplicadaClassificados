<?php
	include("mysql_connection.php");
	require_once("security.php");
	protegePagina();

	$id = $_GET["id"];
	$status = "vendido";

	mysql_query("UPDATE products SET status = '$status' WHERE product_id = '$id' ");

	mysql_close();

?>