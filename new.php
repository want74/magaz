<?php 
	$connect=mysqli_connect('127.0.0.1','root','','magazBD');
	$lol = mysqli_query($connect, "INSERT INTO store ( name, img, cost ) VALUES ('". $_GET['name'] . "', '". $_GET['img'] . "','". $_GET['cost'] . "')");
	
	header("Location: index.php")
?>