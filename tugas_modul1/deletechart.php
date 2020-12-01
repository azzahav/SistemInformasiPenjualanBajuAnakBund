<?php
// include database connection file
include_once("config.php");

// Get 	id_chart  from URL to delete that user
$id_chart  = $_GET['id_chart'];

// Delete user row from table based on given id


$result = mysqli_query($mysqli, "DELETE FROM shopchart WHERE id_chart=$id_chart");
header("Location:halaman2.php");
?>
