<?php
// Create database connection using config file
error_reporting(0);
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM payment ORDER BY id_produk ASC");
?>
<html>
<head>    
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
<style type="text/css">
    .table1{
        font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 50%;
        border: 1px solid #f2f5f7;
        margin-top: 50px;
    }
    .table1 tr th {
        background: #35a9db;
        color: #fff;
        font-weight: normal;
    }
    .table1 tr td {
        padding: 8px;
        text-align: center;
    }
    .table1 tr:nth-child(even){
        background: #DCDCDC;
    }
    header {
    background-color: #ffffff;
    height: 80px;
    top: 0px;
    right: 0px;
    left: 0px;
    position: fixed;
    display: flex;
    justify-content: space-between;
    }
    nav li{
    list-style: none;
    display: inline-block;
    font-weight: bold;
    margin-left: 20px;
    margin-right: 15px;
    margin-top: 10px;
    color: #000000;
    }
    body {
        background-color:	#E9967A;
        font-family: 'Slabo 27px', serif;
    }
    a {
        text-decoration: none;
    }
    h2{
        margin-top: 100px;
    }
    th{
        color: #ffff;
    }
    td{
        color: #ffff;
    }
    form{
        list-style: none;
    display: inline-block;
    font-weight: bold;
    margin-left: 20px;
    margin-right: 10px;
    margin-top: 10px;
    }

</style>
</head>


<body>
<div class="form-row justify-content-center">
<header>
      
      <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Mini Ecommerce</a>
            <form class="form-inline" id="formItem" method="POST" action="">
                <input class="form-control mr-sm-2" type="text" name="query" placeholder="cari data">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchItem"  value="search">Search</button>
            </form>
            <ul>
        <a href="addpayment.php"><li>Add New Produk</li></a>
        <a href="halaman4.php"><li>Back Page</li></a>
        <a href="halaman6.php"><li>Next Page</li></a>
        <a href="index.php"><li>Home</li></a>
        </ul>

        </ul>

        </nav>
        </div>
        
    </header>
    <center>
    <h2>Pembayaran Produk</h2>

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id_cus</th>
      <th scope="col">tgl_transaksi</th>
      <th scope="col">jam_transaksi</th>
      <th scope="col">email</th>
      <th scope="col">total</th>
      <th scope="col">ongkir</th>
      <th scope="col">payment</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    $id =1;

    $query = $_POST['query'];
    if($query != ''){
        $result = mysqli_query($mysqli, "SELECT * FROM payment WHERE pic_paid LIKE '".$query."' ");

    }else{
        $result = mysqli_query($mysqli, "SELECT * FROM payment ");
    }
    if(mysqli_num_rows($result)){
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['no_transaksi']."</td>";
        echo "<td>".$user_data['nama_bank']."</td>"; 
        echo "<td>".$user_data['no_acc']."</td>"; 
        echo "<td>".$user_data['amount']."</td>"; 
        echo "<td>".$user_data['date_pay']."</td>"; 
        echo "<td>".$user_data['time_pay']."</td>"; 
        echo "<td>".$user_data['pic_paid']."</td>"; 
        echo "<td><a  href='editpayment.php?id_payment=$user_data[id_payment]'>Edit</a> | <a href='deletepayment.php?id_payment=$user_data[id_payment]'>Delete</a></td></tr>";        
    }
    }
    else {
        echo '<tr><td colspan="6">Tidak Ada Data</td></tr>';
    }
    
    ?>
  </tbody>
</table>
    </center>
    </div>
</body>
</html>