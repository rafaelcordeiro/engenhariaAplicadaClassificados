<?php

    include 'mysql_connection.php';

	$id =$_POST["id"];
	
    $title       =$_POST["title"];
    $description   =$_POST["description"];
    $price    =$_POST["price"];
	
	mysql_query("UPDATE products SET title='$title', description='$description', value='$price' WHERE product_id ='$id'");
	
	
	mysql_close();

?>