<html>
<head>
	<title>Add Transaksi</title>
    
    <style>
    body{
	font-family: sans-serif;
	background:#E9967A;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_add{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_add{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.add_cus{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_add{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
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
    nav li {
    list-style: none;
    display: inline-block;
    font-weight: bold;
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 10px;
}
a {
        text-decoration: none;
    }
</style>
</head>
<body>
<header>
      <img id="logo" src="shop.png" width="150px" height="80px"/>
      <nav>
        <ul>
        <a href="halaman4.php"><li> View Transaksi</li></a>
        <a href="Halaman3.php"><li>Back Page</li></a>
        <a href="halaman5.php"><li>Next Page</li></a>
        </ul>
      </nav>
    </header>
 
	<h1>Add Item</h1>
 
	<div class="kotak_add">
		<p class="tulisan_add">Silahkan isi data</p>
 
		<form action="add.php" method="post" name="form1">

            <label>id_cus</label>
            <input type="text" class = "add_cus" name="id_cus" required autofocus>
            
            <label>tgl_transaksi</label>
            <input type="text" class= "add_cus" name="tgl_transaksi"  required autofocus>

            <label>jam_transaksi</label>
            <input type="text" class= "add_cus" name="jam_transaksi"  required autofocus>

            <label>email</label>
            <input type="text" class= "add_cus" name="email" required autofocus>

            <label>total</label>
            <input type="text" class= "add_cus" name="total"  required autofocus>
            
            <label>ongkir</label>
            <input type="text" class= "add_cus" name="ongkir"  required autofocus>
            
            <label>payment</label>
            <input type="text" class= "add_cus" name="payment"  required autofocus>
            
			<input type="submit" name="Submit" value="Add" class="tombol_add">
 
			<br/>
			<br/>
			
		</form>
		
    </div>
    <?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $id_cus = $_POST['id_cus'];
    $tgl_transaksi=$_POST['tgl_transaksi'];
    $jam_transaksi=$_POST['jam_transaksi'];
    $email=$_POST['email'];
    $total=$_POST['total'];
    $ongkir=$_POST['ongkir'];
    $payment=$_POST['payment'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO transaksi(id_cus,tgl_transaksi,jam_transaksi,email,total,ongkir,payment) VALUES($id_cus','$tgl_transaksi','$jam_transaksi','$email','$total','$ongkir','$payment')");

    // Show message when user added
	
	header("Location: halaman4.php");
	echo "User added successfully.";
}
?>

</body>
</html>