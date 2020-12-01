<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_cus = $_GET['id_cus'];


// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM customer WHERE id_cus=$id_cus");

header("Location:index.php");

?>
