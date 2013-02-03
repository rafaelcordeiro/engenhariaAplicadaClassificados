<?php
	include("mysql_connection.php");
	require_once("security.php");
	protegePagina();

	$id = $_GET["id"];
	$add_recommendation = 1;

	$query = mysql_query("SELECT recommends FROM products WHERE product_id = '$id'");

	$amount_recommendation = mysql_fetch_assoc($query);

	$add_recommendation += $amount_recommendation["recommends"];

	mysql_query("UPDATE products SET recommends = '$add_recommendation' WHERE product_id = '$id'");	

	mysql_close();
?>