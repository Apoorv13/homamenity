<?php/*
if(!isset($_SESSION['email'])){
	header ('Location:home.php');
	}*/
if(!$_POST)
{
	header('Location:submit_product_category.php');
}
?>
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
<div class="container">
<form action="display_product_details.php" method="post">
<?php
session_start();
if($_POST){

$title=$_POST['listingtitle'];
$categoryselect=$_POST['categoryselect'];
$_SESSION['title']= $title;
$product_id=rand(100000,1000000);
$conn = mysqli_connect('localhost', 'root', 'apoorv', 'reac_products');
//entering data in product table
$sql="INSERT INTO $categoryselect (fieldname, product_id) VALUES ('$title','$product_id')";
//entering data in masterlist
$sql2="INSERT INTO master_products (product_name, product_category, product_id) VALUES ('$title','$categoryselect','$product_id')";
mysqli_query($conn,$sql);
mysqli_query($conn,$sql2);
	$_SESSION['categoryselect']=$categoryselect;
/*********************************************/
if(isset($_FILES['files'])){
    //$errors= array();
	$count1=1;
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
        /*if($file_size > 10485760){
			$errors[]='File size must be less than 10 MB';
        }	*/	
       
        $desired_dir="productpictures";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0755);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                $target= "$desired_dir/".$file_name;
			}else{									// rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;
                 $target= "$desired_dir/".$file_name.time();				 
            }
		if($count1==1)
		{
		$dbc1 = mysqli_connect('localhost', 'root', 'apoorv', 'reac_products');
		$q2 = "UPDATE `master_products` SET product_image='$target' WHERE product_name='$title'";
		mysqli_query($dbc1,$q2);
		}
		$dbc = mysqli_connect('localhost', 'root', 'apoorv', 'reac_products');
		$q1 = "ALTER TABLE `$categoryselect` ADD `image$count1` VARCHAR(50) NULL DEFAULT NULL";			
        $q2 = "UPDATE `$categoryselect` SET image$count1='$target' WHERE fieldname='$title'"; 
		mysqli_query($dbc,$q1);
		mysqli_query($dbc,$q2);
		$count1++;
		}
    }
}
/*********************************************/
$count=1;
$dbc = mysqli_connect('localhost', 'root', 'apoorv', 'reac_admins');
$q = "SELECT * FROM $categoryselect";
$r = mysqli_query($dbc,$q);
$fields = mysqli_fetch_assoc($r);
while($count<=$fields['fieldcount']){
echo '
<div class="row">
<div class="form-group col-md-6 col-md-offset-3">
<label>'.$fields['field'.$count.''].'';
if($fields['required'.$count.'']=="yes"){
echo '
<span class="error">*</span>
</label>
<input type="text" class="form-control" name="field'.$count.'" required /> ';
}else{
echo '
</label>
<input type="text" class="form-control" name="field'.$count.'"  />';
}
echo '
</div>
</div>';
$count++;
}
echo '
<div class="row">
<div class="col-md-6 col-md-offset-3">
<input type="submit" name="submit" class="btn btn-default btn-lg" value="Submit" />
</div>
</div>';
}
?>
</form>
</div>
</body>
</html>