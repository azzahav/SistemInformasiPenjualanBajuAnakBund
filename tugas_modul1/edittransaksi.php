<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_cus = $_POST['id_cus'];
    $tgl_transaksi = $_POST['tgl_transaksi'];
    $jam_transaksi=$_POST['jam_transaksi'];
    $email=$_POST['email'];
    $total=$_POST['total'];
    $ongkir=$user_data['ongkir'];
    $payment=$_POST['payment'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE transaksi SET id_cus='$id_cus',tgl_transaksi='$tgl_transaksi',jam_transaksi='$jam_transaksi',email='$email',total='$total',ongkir='$ongkir',payment='$payment' WHERE no_transaksi=$no_transaksi");

    // Redirect to homepage to display updated user in list
    header("Location: halaman4.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$no_transaksi = $_GET['no_transaksi'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE no_transaksi=$no_transaksi");

while($user_data = mysqli_fetch_array($result))
{
    $id_cus = $user_data['id_cus'];
    $tgl_transaksi = $user_data['tgl_transaksi'];
    $jam_transaksi=$user_data['jam_transaksi'];
    $email=$user_data['email'];
    $total=$user_data['total'];
    $ongkir=$user_data['ongkir'];
    $payment=$user_data['payment'];
}
?>
<html>
<head>  
    <title>Edit Transaksi Data</title>
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
        <a href="addtransaksi.php"><li>Add New Transaksi</li></a>
        <a href="halaman5.php"><li>Next Page</li></a>
        <a href="halaman4.php"><li>Back Page</li></a>
        </ul>
      </nav>
    </header>
   
 
	<div class="kotak_edit">
		<p class="tulisan_edit">Silahkan edit data</p>
 
		<form name="update_user" method="post" action="edit.php">
 
			<label>tgl_transaksi</label>
			<input type="text" class = "edit" name="tgl_transaksi" value=<?php echo $tgl_transaksi;?> required autofocus>

            <label>jam_transaksi</label>
            <input type="text" class = "edit" name="jam_transaksi" value=<?php echo $jam_transaksi;?> required autofocus>
            
            <label>email</label>
            <input type="text" class= "edit" name="email" value=<?php echo $email;?> required autofocus>

            <label>total</label>
            <input type="text" class= "edit" name="total" value=<?php echo $total;?> required autofocus>

            <label>ongkir</label>
            <input type="text" class= "edit" name="ongkir" value=<?php echo $ongkir;?> required autofocus>

            <label>payment</label>
            <input type="text" class= "edit" name="payment" value=<?php echo $payment;?> required autofocus>
            
            <input type="hidden" class="edit" name="no_transaksi" value="<?php echo $_GET['no_transaksi'];?>">
			<input type="submit" class= "tombol_edit" name="update" value="Update">
 
			<br/>
			<br/>
			
		</form>
		
    </div>
    
    
</body>
</html>
