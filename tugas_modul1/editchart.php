<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_chart = $_POST['id_chart'];
    $id_customer = $_POST['id_customer'];
    $id_produk = $_POST['id_produk'];
    $pieces=$_POST['pieces'];
    $datechart=$_POST['datechart'];
    $timechart=$_POST['timechart'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE shopchart SET id_customer='$id_customer',id_produk='$id_produk',pieces='$pieces',datechart='$datechart',timechart='$timechart' WHERE id_chart=$id_chart");

    // Redirect to homepage to display updated user in list
    header("Location: halaman2.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_chart = $_GET['id_chart'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM shopchart WHERE id_chart=$id_chart");

while($user_data = mysqli_fetch_array($result))
{
    $id_chart = $user_data['id_chart'];
    $id_customer = $user_data['id_customer'];
    $id_produk = $user_data['id_produk'];
    $pieces=$user_data['pieces'];
    $datechart=$user_data['datechart'];
    $timechart=$user_data['timechart'];
}
?>
<html>
<head>  
    <title>Edit shopchart Data</title>
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
        <a href="addchart.php"><li>Add New Chart</li></a>
        <a href="halaman2.php"><li>Back Page</li></a>
        </ul>
      </nav>
    </header>
   
 
	<div class="kotak_edit">
		<p class="tulisan_edit">Silahkan edit data</p>
 
		<form name="update_user" method="post" action="editchart.php">
			<label>Id_chart</label>
			<input type="text" class = "edit" name="id_chart" value=<?php echo $id_chart;?> required autofocus>
 
			<label>id_customer</label>
			<input type="text" class = "edit" name="id_customer" value=<?php echo $id_customer;?> required autofocus>

            <label>id_produk</label>
            <input type="text" class = "edit" name="id_produk" value=<?php echo $id_produk;?> required autofocus>
            
            <label>pieces</label>
            <input type="text" class= "edit" name="pieces" value=<?php echo $pieces;?> required autofocus>

            <label>datechart</label>
            <input type="text" class= "edit" name="datechart" value=<?php echo $datechart;?> required autofocus>

            <label>timechart</label>
            <input type="text" class= "edit" name="timechart" value=<?php echo $timechart;?> required autofocus>
            
            <input type="hidden" class="edit" name="id_chart" value=<?php echo $_GET['id_chart'];?>>
			<input type="submit" class= "tombol_edit" name="update" value="Update">
 
			<br/>
			<br/>
			
		</form>
		
    </div>
    
    
</body>
</html>
