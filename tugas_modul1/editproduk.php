<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_produk  = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $price = $_POST['price'];
    $description=$_POST['description'];
    $category=$_POST['category'];
    $stock=$_POST['stock'];
    $size=$_POST['size'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE produk SET  nama_produk='$nama_produk',price='$price',	description='$description',category='$category',stock='$stock', size='$size' WHERE id_produk =$id_produk ");

    // Redirect to homepage to display updated user in list
    header("Location: Halaman3.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_produk  = $_GET['id_produk'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id_produk =$id_produk ");

while($user_data = mysqli_fetch_array($result))
{
    $id_produk  = $user_data['id_produk '];
    $nama_produk = $user_data['nama_produk'];
    $price = $user_data['price'];
    $description=$user_data['description'];
    $category=$user_data['category'];
    $stock=$user_data['stock'];
    $size=$user_data['size'];
}
?>
<html>
<head>  
    <title>Edit Produk Data</title>
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
        <a href="addproduk.php"><li>Add New Produk</li></a>
        <a href="halaman3.php"><li>Back Page</li></a>
        <a href="halaman4.php"><li>Next Page</li></a>
        </ul>
      </nav>
    </header>
   
 
	<div class="kotak_edit">
		<p class="tulisan_edit">Silahkan edit data</p>
 
		<form name="update_user" method="post" action="editproduk.php">
			
			<label>nama_produk</label>
			<input type="text" class = "edit" name="nama_produk" value=<?php echo $nama_produk;?> required autofocus>

            <label>price</label>
            <input type="text" class = "edit" name="price" value=<?php echo $price;?> required autofocus>
            
            <label>description</label>
            <input type="text" class= "edit" name="description" value=<?php echo $description;?> required autofocus>

            <label>category</label>
            <input type="text" class= "edit" name="category" value=<?php echo $category;?> required autofocus>

            <label>stock</label>
            <input type="text" class= "edit" name="stock" value=<?php echo $stock;?> required autofocus>
            
            <label>size</label>
            <input type="text" class= "edit" name="size" value=<?php echo $size;?> required autofocus>
            
            <input type="hidden" class="edit" name="id_produk" value=<?php echo $_GET['id_produk'];?>>
			<input type="submit" class= "tombol_edit" name="update" value="Update">
 
			<br/>
			<br/>
			
		</form>
		
    </div>
    
    
</body>
</html>
