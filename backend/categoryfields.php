<?php
session_start();/*
if(!isset($_SESSION['email'])){
	header ('Location:adminlogin.php');
	}*/
$catname=$_POST['catname'];
$fieldno=$_POST['fieldno'];
$_SESSION['category']=$catname;
$_SESSION['field']=$fieldno;
$dbc1 = mysqli_connect('localhost','root','apoorv','reac_products');
$q1 = "CREATE TABLE `reac_products`.`$catname` ( `id` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`))";
$q2 = "ALTER TABLE `$catname` ADD `fieldname` VARCHAR(20) NULL DEFAULT NULL";
$q3 = "ALTER TABLE `$catname` ADD `email` VARCHAR(50) NULL DEFAULT NULL";
$q4 = "ALTER TABLE `$catname` ADD `product_id` INT NULL DEFAULT NULL";
mysqli_query($dbc1,$q1);
mysqli_query($dbc1,$q2);
mysqli_query($dbc1,$q3);
mysqli_query($dbc1,$q4);
$dbc2 = mysqli_connect('localhost','root','apoorv','reac_admins');
$q2 = "CREATE TABLE `reac_admins`.`$catname` ( `id` INT NOT NULL AUTO_INCREMENT , `category` VARCHAR(200) , PRIMARY KEY (`id`))";
$q3 = "INSERT INTO `$catname` (category) VALUES ('$catname')";
$q4 = "INSERT INTO allcategories (category) VALUES ('$catname')";
mysqli_query($dbc2,$q2);
mysqli_query($dbc2,$q3);
mysqli_query($dbc2,$q4);

?>
<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Fields</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<?php echo '<h1 style="text-align:center;padding:30px;margin-top:30px;">Add fields in '.$catname.'</h1><br>';?>
</body>
</html>
<?php
$count1=1;
echo '<div class="container">
<form action="categoryfieldsdb.php" method="POST">';
while($count1<=$fieldno)
{
	echo '
<div class="form-group">
<div class="row">
<div class="col-md-3">
<p>Field '.$count1.': </p>
</div>
<div class="col-md-3">
<label>Fieldname:<br>
<input type="text" style="width:90px !important;height:30px !important;" name="fieldname'.$count1.'" required />
</label></div>
<div class="col-md-3">
<label>Fieldtype:</label>
<select name="fieldtype'.$count1.'" class="form-control" required>
<option value="int">INT</option>
<option value="varchar">VARCHAR(20)</option>
</select>
</div>
<div class="col-md-3">
<label>Required:</label>
<select name="required'.$count1.'" class="form-control" required>
<option value="yes">yes</option>
<option value="no">no</option>
</select>
</div>
</div>
</div><br>';
$count1++;	
}
echo '
<button type="Submit" class="btn btn-primary btn-lg" style="display:block; margin:auto;">SUBMIT</button>
</form>';
?>