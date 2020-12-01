<?php
// include database connection file
include_once("config.php");

// Get 	id_chart  from URL to delete that user
$id_produk  = $_GET['id_produk'];

// Delete user row from table based on given id


$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id_produk=$id_produk");
header("Location:halaman3.php");
?>
