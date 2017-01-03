<?php 
session_start();/*
if(!isset($_SESSION['email'])){
	header ('Location:home.php');
	}
session_start();*/
if($_POST){
$categoryselect=$_SESSION['categoryselect'];
$title=$_SESSION['title'];
$count=1;
$dbc1 = mysqli_connect('localhost', 'root', 'apoorv', 'reac_admins');
$dbc2 = mysqli_connect('localhost', 'root', 'apoorv', 'reac_products');
$q = "SELECT * FROM $categoryselect";
$r = mysqli_query($dbc1,$q);
$fields = mysqli_fetch_assoc($r);
//echo $fields['fieldcount'].'<br>';
while($count<=$fields['fieldcount'])
{
$field=$_POST["field$count"];
//echo $field.'<br>';
$q1 = "UPDATE `$categoryselect` SET field$count='$field' WHERE fieldname='$title'";
mysqli_query($dbc2,$q1);
$count++;
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>All Products</title>
<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<section>
<div class="container">
<?php
$conn = mysqli_connect('localhost','root', 'apoorv', 'reac_products');
$sql = "SELECT * FROM master_products;";
$r = mysqli_query($conn,$sql);
$flag = 0;
 while($data=mysqli_fetch_array($r)) { 
 extract($data);
echo '
<h2>'.$product_category'</h2>
<div class="col-md-3 col-sm-6 col-xs-12">
<div style="height:400px; width:100%">
<div>
<h3>'.$product_category'</h3>
<img src="/'.$product_image.'" style="height:250px; width:80%; z-index:10; display:block; margin:auto;" />
<h4 "style: display:block; margin:auto;">'.$product_name.'</h4>
<h6>'.$product_category.'</h6>
<h2><a href="product_profile.php?category='.$product_category.'&product='.$product_id.'" style="text-decoration:none; font-family:sans-serif;">Buy</a></h2>
</div>
</div>
</div>';
if( $flag == 3)
{
echo '</div> ';
}
$flag = $flag + 1;
 }
?>
</div>
</section>
</body>
</html>
