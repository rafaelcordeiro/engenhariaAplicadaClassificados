<?php
	include("mysql_connection.php");

	$id     = $_GET["id"];

	$query  = mysql_query("SELECT * FROM products WHERE product_id = '$id';");
?>

<?php

	while($values = mysql_fetch_array($query)) {
		$title       = $values["title"];
		$description = $values["description"];
		$price       = $values["values"];
		$recommends  = $values["recommends"];
		$status      = $values["status"];
		$owner       = $values["owner"];	
	}

?>