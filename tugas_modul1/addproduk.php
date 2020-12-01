<html>
<head>
	<title>Add Produk</title>
    
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
 
.add_produk{
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
        <a href="Halaman3.php"><li> View Produk</li></a>
        <a href="Halaman3.php"><li>Back Page</li></a>
        <a href="halaman4.php"><li>Next Page</li></a>
        </ul>
      </nav>
    </header>
 
	<h1>Add Produk</h1>
 
	<div class="kotak_add">
		<p class="tulisan_add">Silahkan isi data</p>
 
		<form action="addproduk.php" method="post" name="form1">
 
			<label>nama_produk</label>
			<input type="text" class = "add_produk" name="nama_produk" required autofocus>

            <label>price</label>
            <input type="text" class = "add_produk" name="price"  required autofocus>
            
            <label>description</label>
            <input type="text" class= "add_produk" name="description" required autofocus>

            <label>category</label>
            <input type="text" class= "add_produk" name="category" required autofocus>

            <label>	stock</label>
            <input type="text" class= "add_produk" name="stock"  required autofocus>
            
            <label>	size</label>
            <input type="text" class= "add_produk" name="size" required autofocus>
            
			<input type="submit" name="Submit" value="Add" class="tombol_add">
 
			<br/>
			<br/>
			
		</form>
		
    </div>
    <?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $price = $_POST['price'];
    $description=$_POST['description'];
    $category=$_POST['category'];
    $stock=$_POST['stock'];
    $size=$_POST['size'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO produk (nama_produk,price,description,category,stock,size) VALUES('$nama_produk','$price','$description','$category','$stock','$size')");

    // Show message when user added
	
	header("Location: Halaman3.php");
	echo "User added successfully.";
}
?>

</body>
</html>