<?php 
	$connect=mysqli_connect('127.0.0.1','root','','magazBD');
	$lol = mysqli_query($connect, "UPDATE  store SET name = '". $_POST['name'] . "', cost = '". $_POST['cost'] . "', img = '". $_POST['img'] . "' WHERE id = '". $_POST['id'] . "'");
	header("Location: index.php");
?>