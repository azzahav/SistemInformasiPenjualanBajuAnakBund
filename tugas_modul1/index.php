<?php
// Create database connection using config file
error_reporting(0);
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM customer ORDER BY id_cus ASC");
?>

<html>
<head>    
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
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
        <a href="add.php"><li>Add New User</li></a>
        <a href="halaman2.php"><li>Next Page</li></a>
        <a href="index.php"><li>Home</li></a>
        <a href="logout.php"><li>Logout</li></a>
        </ul>

        </ul>

        </nav>
        </div>
        
    </header>
    <center>
    <h2>Customers Pembeli Baju Anak</h2>  
   
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    $id =1;

    $query = $_POST['query'];
    if($query != ''){
        $result = mysqli_query($mysqli, "SELECT * FROM customer WHERE id_cus LIKE '".$query."' ");

    }else{
        $result = mysqli_query($mysqli, "SELECT * FROM customer ");
    }
    if(mysqli_num_rows($result)){
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['email']."</td>"; 
        echo "<td>".$user_data['phone']."</td>"; 
        echo "<td>".$user_data['addres']."</td>"; 
        echo "<td>".$user_data['city']."</td>"; 
        echo "<td> <a href='edit.php?id_cus=$user_data[id_cus]'>Edit</a> | <a href='delete.php?id_cus=$user_data[id_cus]'>Delete</a></td></tr>";        
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