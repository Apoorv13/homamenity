<?php
session_start();
if(!isset($_SESSION['email'])){
	header ('Location:home.php');
	}
if(!$_GET){
	header ('Location:display_product_details.php');
}else{
	$category=$_GET['category'];
	$product=$_GET['product'];
}
$count=1;
//Fetching data
$dbc1 = mysqli_connect('localhost','lavvish','lavvish','lavvishproducts');
$q1 = "SELECT * FROM $category WHERE product_id = $product";
$r1 = mysqli_query($dbc1,$q1);
$product = mysqli_fetch_assoc($r1);
//Fetching metadata
$dbc2 = mysqli_connect('localhost','lavvish','lavvish','lavvishadmins');
$q2 = "SELECT * FROM $category WHERE id = 1";
$r2 = mysqli_query($dbc2,$q2);
$data = mysqli_fetch_assoc($r2);
//Displaying the data
echo '<img src="'.$product['image1'].'" style="height:200px; width:200px;" /><br>';
echo '<img src="'.$product['image2'].'" style="height:200px; width:200px; margin-top:20px;" /><br>';
echo '<img src="'.$product['image3'].'" style="height:200px; width:200px; margin-top:20px;" /><br>';

while($count<=$data['fieldcount']){
echo $data["field$count"]." - ";
echo $product["field$count"]."<br>";
$count++;
}
?>