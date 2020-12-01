<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_payment  = $_POST['id_payment '];
    $no_transaksi = $_POST['no_transaksi'];
    $nama_bank = $_POST['nama_bank'];
    $no_acc=$_POST['no_acc'];
    $amount=$_POST['amount'];
    $date_pay=$_POST['date_pay'];
    $time_pay=$_POST['time_pay'];
    $pic_paid=$_POST['pic_paid'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE payment SET no_transaksi='$no_transaksi',nama_bank='$nama_bank',no_acc='$no_acc',amount='$amount',date_pay='$date_pay',time_pay='$time_pay',pic_paid='$pic_paid' WHERE id_payment=$id_payment");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_payment=$_GET['id_payment'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM payment WHERE id_payment=$id_payment");

while($user_data = mysqli_fetch_array($result))
{
    $id_payment  = $user_data['id_payment '];
    $no_transaksi = $user_data['no_transaksi'];
    $nama_bank = $user_data['nama_bank'];
    $no_acc=$user_data['no_acc'];
    $amount=$user_data['amount'];
    $date_pay=$user_data['date_pay'];
    $time_pay=$user_data['time_pay'];
    $pic_paid=$user_data['pic_paid'];
}
?>
<html>
<head>  
    <title>Edit Payment Data</title>
    <style type="text/css">
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
    body {
        background-image: url(trees.png);
        font-family: 'Slabo 27px', serif;
    }
    .table2 tr td {
        padding: 8px;
        text-align: center;
    }
    h2{
        margin-top: 100px;
    }
    body{
	font-family: sans-serif;
	background: #d5f0f3;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_edit{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_edit{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.edit{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_edit{
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
    
    </style>
</head>

<body>
<header>
      <img id="logo" src="shop.png" width="150px" height="80px"/>
      <nav>
        <ul>
        <a href="addpayment.php"><li>Add New Payment</li></a>
        <a href="halaman5.php"><li>Back Page</li></a>
        </ul>
      </nav>
    </header>
   
 
	<div class="kotak_edit">
		<p class="tulisan_edit">Silahkan edit data</p>
 
		<form name="update_user" method="post" action="edit.php">
			<label>Id</label>
			<input type="text" class = "edit" name="id_payment" value=<?php echo $id_payment;?> required autofocus>
 
			<label>no_transaksi</label>
			<input type="text" class = "edit" name="no_transaksi" value=<?php echo $no_transaksi;?> required autofocus>

            <label>nama_bank</label>
            <input type="text" class = "edit" name="nama_bank" value=<?php echo $nama_bank;?> required autofocus>
            
            <label>no_acc</label>
            <input type="text" class= "edit" name="no_acc" value=<?php echo $no_acc;?> required autofocus>

            <label>amount</label>
            <input type="text" class= "edit" name="amount" value=<?php echo $amount;?> required autofocus>

            <label>date_pay</label>
            <input type="text" class= "edit" name="date_pay" value=<?php echo $date_pay;?> required autofocus>

            <label>time_pay</label>
            <input type="text" class= "edit" name="time_pay" value=<?php echo $time_pay;?> required autofocus>

            <label>pic_paid</label>
            <input type="text" class= "edit" name="pic_paid" value=<?php echo $pic_paid;?> required autofocus>
            
            <input type="hidden" class="edit" name="id_payment" value=<?php echo $_GET['id_payment'];?>>
			<input type="submit" class= "tombol_edit" name="update" value="Update">
 
			<br/>
			<br/>
			
		</form>
		
    </div>
    
    
</body>
</html>
