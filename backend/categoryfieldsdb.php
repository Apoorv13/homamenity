<?php
session_start();
if(!isset($_SESSION['email'])){
	header ('Location:adminlogin.php');
	}
$catname=$_SESSION['category'];
$fieldno=$_SESSION['field'];
$count2=1;
	while($count2<=$fieldno)
	{   $required=$_POST["required$count2"];
	    $fieldname=$_POST["fieldname$count2"];
		$fieldtype=$_POST["fieldtype$count2"];
		if($fieldtype=="int")
		{
		$dbc1 = mysqli_connect('localhost','root','apoorv','reac_products');
		$q1 = "ALTER TABLE `$catname` ADD `field$count2` INT NULL DEFAULT NULL";
		mysqli_query($dbc1,$q1);
		}
		else if($fieldtype=="varchar"){
        $dbc1 = mysqli_connect('localhost','root','apoorv','reac_products');
		$q1 = "ALTER TABLE `$catname` ADD `field$count2` INT NULL DEFAULT NULL";
		$q2 = "ALTER TABLE `$catname` CHANGE `field$count2` `field$count2` VARCHAR(20) NULL DEFAULT NULL";
		mysqli_query($dbc1,$q1);
		mysqli_query($dbc1,$q2);
		}
		$dbc2 = mysqli_connect('localhost','root','apoorv','reac_admins');
		$q1 = "ALTER TABLE `$catname` ADD `field$count2` VARCHAR(20) NOT NULL";
		$q2 = "ALTER TABLE `$catname` ADD `required$count2` VARCHAR(20) NOT NULL";
		$q3 = "UPDATE `$catname` SET field$count2='$fieldname' WHERE category='$catname'"; 
		$q4 = "UPDATE `$catname` SET required$count2='$required' WHERE category='$catname'"; 
		
		mysqli_query($dbc2,$q1);
		mysqli_query($dbc2,$q2);
		mysqli_query($dbc2,$q3);
		mysqli_query($dbc2,$q4);
		$count2++;
	}
	$dbc3 = mysqli_connect('localhost','root','apoorv','reac_admins');
	$q1 = "ALTER TABLE `$catname` ADD fieldcount INT(11) NOT NULL";
	$q2 = "UPDATE `$catname` SET fieldcount='$fieldno' WHERE category='$catname'"; 
        mysqli_query($dbc3,$q1);
		mysqli_query($dbc3,$q2); 
	header('Location:submit_product_category.php');
	
	?>