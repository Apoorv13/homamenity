<?php
/*session_start();
if(!isset($_SESSION['email'])){
	header ('Location:adminlogin.php');
	}*/
	?>
<!DOCTYPE html> 
<html>
<head>
<title>Add Category</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body><br><br>
<div class="container">
<form action="categoryfields.php" method="POST">
<div class="row">
<div class="col-md-offset-4 col-md-6 form-group">
<label>Category Name:</label>
<input type="text" name="catname" required />
</div>
</div><br>
<div class="row">
<div class="col-md-offset-4 col-md-6 form-group">
<label>Number of fields:</label>
<input type="number" name="fieldno" required />
</div>
</div><br>
<button type="Submit" class="btn btn-primary btn-lg" style="display:block; margin:auto;">SUBMIT</button>
</form>
</div>
</body>
</html>