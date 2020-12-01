<html>
<head>
	<title>Add Payment</title>
    
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
        <a href='halaman5.php'><li> View Payment</li></a>
        <a href="index.php"><li>Home</li></a>
        </ul>
      </nav>
    </header>
 
	<h1>Add Item</h1>
 
	<div class="kotak_add">
		<p class="tulisan_add">Silahkan isi data</p>
 
		<form action="addpayment.php" method="post" name="form1">
			<label>id_payment</label>
			<input type="text" class = "add_cus" name="id_payment"  required autofocus>

            <label>no_transaksi</label>
            <input type="text" class = "add_cus" name="no_transaksi" required autofocus>
            
            <label>nama_bank</label>
            <input type="text" class= "add_cus" name="nama_bank"  required autofocus>

            <label>no_acc</label>
            <input type="text" class= "add_cus" name="no_acc"  required autofocus>

            <label>amount</label>
            <input type="text" class= "add_cus" name="amount" required autofocus>

            <label>date_pay</label>
            <input type="text" class= "add_cus" name="date_pay"  required autofocus>
            
            <label>time_pay</label>
            <input type="text" class= "add_cus" name="time_pay"  required autofocus>
            
            <label>pic_paid</label>
            <input type="text" class= "add_cus" name="pic_paid"  required autofocus>
            
			<input type="submit" name="Submit" value="Add" class="tombol_add">
 
			<br/>
			<br/>
			
		</form>
		
    </div>
    <?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $id_payment = $_POST['id_payment'];
    $no_transaksi = $_POST['no_transaksi'];
    $nama_bank=$_POST['nama_bank'];
    $no_acc=$_POST['no_acc'];
    $amount=$_POST['amount'];
    $date_pay=$_POST['date_pay'];
    $time_pay=$_POST['time_pay'];
    $pic_paid=$_POST['pic_paid'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO payment(id_payment,no_transaksi,nama_bank,no_acc,amount,date_pay,time_pay,pic_paid) VALUES('$id_payment','$no_transaksi','$nama_bank','$no_acc','$amount','$date_pay','$time_pay','$pic_paid')");

    // Show message when user added
	
	header("Location: halaman5.php");
	echo "User added successfully.";
}
?>

</body>
</html>