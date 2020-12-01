<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_cus = $_POST['id_cus'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $addres=$_POST['addres'];
    $city=$_POST['city'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE customer SET nama='$nama',email='$email',password='$password',phone='$phone',addres='$addres',city='$city' WHERE id_cus=$id_cus");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_cus = $_GET['id_cus'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM customer WHERE id_cus=$id_cus");

while($user_data = mysqli_fetch_array($result))
{
    $id_cus =$user_data ['id_cus'];
    $nama = $user_data ['nama'];
    $email = $user_data ['email'];
    $password=$user_data ['password'];
    $phone=$user_data ['phone'];
    $addres=$user_data ['addres'];
    $city=$user_data ['city'];
}
?>
<html>
<head>  
    <title>Edit Customer Data</title>
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
        <a href="add.php"><li>Add New User</li></a>
        <a href="halaman2.php"><li>Next Page</li></a>
        <a href="index.php"><li>Home</li></a>
        </ul>
      </nav>
    </header>
   
 
	<div class="kotak_edit">
		<p class="tulisan_edit">Silahkan edit data</p>
 
		<form name="update_user" method="post" action="edit.php">
			<label>Id</label>
			<input type="text" class = "edit" name="id_cus" value=<?php echo $id_cus;?> required autofocus>
 
			<label>Nama</label>
			<input type="text" class = "edit" name="nama" value=<?php echo $nama;?> required autofocus>

            <label>Email</label>
            <input type="text" class = "edit" name="email" value=<?php echo $email;?> required autofocus>
            
            <label>Password</label>
            <input type="text" class= "edit" name="password" value=<?php echo $password;?> required autofocus>

            <label>Phone</label>
            <input type="text" class= "edit" name="phone" value=<?php echo $phone;?> required autofocus>

            <label>Address</label>
            <input type="text" class= "edit" name="addres" value=<?php echo $addres;?> required autofocus>

            <label>Citi</label>
            <input type="text" class= "edit" name="city" value=<?php echo $city;?> required autofocus>
            
            <input type="hidden" class="edit" name="id_cus" value=<?php echo $_GET['id_cus'];?>>
			<input type="submit" class= "tombol_edit" name="update" value="Update">
 
			<br/>
			<br/>
			
		</form>
		
    </div>
    
    
</body>
</html>
