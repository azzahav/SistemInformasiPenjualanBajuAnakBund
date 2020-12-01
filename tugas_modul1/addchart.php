<html>
<head>
	<title>Add Chart</title>
    
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
 
.add_chart{
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
        <a href='halaman2.php'><li> View Chart</li></a>
        <a href="index.php"><li>Home</li></a>
        </ul>
      </nav>
    </header>
 
	<h1>Add Item</h1>
 
	<div class="kotak_add">
		<p class="tulisan_add">Silahkan isi data</p>
 
		<form action="addchart.php" method="post" name="form1">
 
			<label>id_customer</label>
			<input type="text" class = "add_chart" name="id_customer"  required autofocus>

            <label>id_produk</label>
            <input type="text" class = "add_chart" name="id_produk" required autofocus>
            
            <label>pieces</label>
            <input type="text" class= "add_chart" name="	pieces" required autofocus>

            <label>datechart</label>
            <input type="text" class= "add_chart" name="datechart"  required autofocus>

            <label>timechart</label>
            <input type="text" class= "add_chart" name="timechart"  required autofocus>
            
			<input type="submit" name="Submit" value="Add" class="tombol_add">
 
			<br/>
			<br/>
			
		</form>
		
    </div>
    <?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $id_customer = $_POST['id_customer'];
    $id_produk=$_POST['id_produk'];
    $pieces=$_POST['pieces'];
    $datechart=$_POST['datechart'];
    $timechart=$_POST['timechart'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO shopchart(id_customer,id_produk,pieces,datechart,timechart) VALUES('$id_customer','$id_produk','$pieces','$datechart','$timechart')");

    // Show message when user added
	
	header("Location: halaman2.php");
	echo "User added successfully.";
}
?>

</body>
</html>