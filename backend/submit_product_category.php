<?php/*
session_start();
//Checking if the user is logged in
if(!isset($_SESSION['email'])){
	header ('Location:home.php');
}*/
?>
<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <!-- Meta Tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  <!-- Title -->
     

    <!-- Mobile Device Meta -->
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui' /> 
<style>
.error{
	color:red;
	font-family:sans-serif;
}
</style>
	</head>
<body>
	<section>
<div>
<h1 style="text-align:center; margin-top:30px;padding:20px;">Add Product</h1><br><br>
<form method="post" action="submit_product_details.php" enctype="multipart/form-data">
<div class="container">
<div class="row">
<div class="form-group col-md-6 col-md-offset-3">
<label>Listing Title:<span class="error">*</span></label>
<input type="text" class="form-control" name="listingtitle" required />
</div>
</div>
<div class="row">
<div class="form-group col-md-6 col-md-offset-3">
<label>Listing category:<span class="error">*</span></label>
<select name="categoryselect" class="form-control">
<?php 
session_start();
//establishing connection and displaying categories 
$dbc = mysqli_connect('localhost', 'root', 'apoorv', 'reac_admins');
$q = "SELECT * FROM allcategories;";
$r = mysqli_query($dbc,$q);
//storing values in array and extrcting data
while($data=mysqli_fetch_array($r)) { 
extract($data);
echo '<option>'.$category.'</option>';
}
?>
</select>
</div>
</div>
<div class="row">
<div class="form-group col-md-6 col-md-offset-3">
<label>Listing Images:<span class="error">*</span></label>
<input type="file" name="files[]" multiple="" />
</div>
</div>
<div class="row">
<div class="col-md-6 col-md-offset-3">
<input type="submit" name="submit" class="btn btn-default btn-lg" value="Submit" />
</div>
</div>
</div>
</form>
</div>
</section>
</body>
</html>