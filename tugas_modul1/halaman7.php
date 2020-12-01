<?php
// CREATE Database connection using config file
include_once("config.php");

// Fetch all users data from database

$result = mysqli_query($mysqli, "SELECT nama_produk, price, size, pieces, datechart, timechart 
FROM produk INNER JOIN shopchart ON produk.id_produk = shopchart.id_produk");
?>

<html>
<head>    
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman 6</title>
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
           
            <ul>
        <a href="addpayment.php"><li>Add New Produk</li></a>
        <a href="halaman6.php"><li>Back Page</li></a>
        <a href="logout.php"><li>Logout</li></a>
        </ul>

        </ul>

        </nav>
        </div>
        
    </header>
    <center>  
    <h2>Inner Join Check Out Barang</h2>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">nama_produk</th>
      <th scope="col">price</th>
      <th scope="col">size</th>
      <th scope="col">pieces</th>
      <th scope="col">datechart</th>
      <th scope="col">timechart</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_produk']."</td>";
        echo "<td>".$user_data['price']."</td>";
        echo "<td>".$user_data['size']."</td>";
        echo "<td>".$user_data['pieces']."</td>"; 
        echo "<td>".$user_data['datechart']."</td>"; 
        echo "<td>".$user_data['timechart']."</td>";        
    }
    ?>
   </tbody>
</table>

    </center>
    </div>
</body>
</html>















