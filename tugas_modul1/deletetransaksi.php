<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$no_transaksi  = $_GET['no_transaksi '];


// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM customer WHERE no_transaksi =$no_transaksi ");

header("Location:halaman4.php");

?>
