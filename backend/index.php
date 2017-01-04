<?php
session_start();
$Err = "";
if(isset($_SESSION['email'])){
	header ('Location:dashboard.php');
	}else{
if($_POST)
{
	$dbc = mysqli_connect('localhost','root','apoorv','reac_admins');
	$q = "SELECT * FROM admins WHERE username='$_POST[user]' AND password = '$_POST[password]'";
    $r = mysqli_query($dbc,$q);
    $num = mysqli_num_rows($r);

if($num==1){
$_SESSION['email']=$_POST['email'];
header('Location:dashboard.php');
}
else{
$Err = "Email or Password is incorrect";
}
}
	}
?>
<!DOCTYPE html> 
<html>
<head>
<title>Admin | Login</title>
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
<div class="row">
<div class="col-md-offset-3 col-md-6">
<div style="margin-top:50px;border:2px solid black; width:100%; height:330px;">
<h2 style="font-family:sans-serif; text-align:center;">Hoamenities | Admin</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <div class="form-group" style="width:80%; display:block; margin:auto;">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="user" id="user" class="form-control" placeholder="Email">
  </div><br>
  <div class="form-group" style="width:80%; display:block; margin:auto;">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div><br>
  <button type="Submit" class="btn btn-primary btn-lg" style="display:block; margin:auto;">LOGIN</button>
<br><span><?php echo $Err; ?></span>
  </form>
</div>
</div>
</div>
<div class="row">
<div class="col-md-offset-3 col-md-6">
</div>
</div>
</div>
</section>
</body>
</html>