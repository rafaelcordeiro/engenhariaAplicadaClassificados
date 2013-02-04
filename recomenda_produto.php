<?php
	require_once("mysql_connection.php");
	require_once("security.php");
	include("ver_produto.php");
	protegePagina();

	$id = $_GET["id"];
	$user = $_SESSION['userName'];
	$add_recommendation = 1;

	$query = mysql_query("SELECT recommends FROM products WHERE product_id = '$id'");

	$amount_recommendation = mysql_fetch_assoc($query);

	$add_recommendation += $amount_recommendation["recommends"];

	mysql_query("UPDATE products SET recommends = '$add_recommendation' WHERE product_id = '$id'");
	mysql_query("INSERT INTO recommendedby (product_id, user) VALUES ('$id','$user')");	

	mysql_close();
?>