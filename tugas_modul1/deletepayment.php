<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_payment = $_GET['id_payment'];


// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM customer WHERE id_payment=$id_payment");

header("Location:halaman5.php");

?>
