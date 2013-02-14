<?php

    include 'mysql_connection.php';
    require_once("security.php");
  protegePagina();

	$id = $_POST["id"];

	$name     = $_POST["nome"];
	$email    = $_POST["email"];
	$password = $_POST["password"];

	mysql_query("UPDATE user SET name ='$name', password='$password', email='$email'  WHERE id ='$id'");

	mysql_close();
