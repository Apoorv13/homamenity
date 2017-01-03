<?php
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
		$dbc1 = mysqli_connect('localhost','lavvish','lavvish','lavvishproducts');
		$q2 = "UPDATE `masterlist` SET product_image='$target' WHERE product_name='$title'";
		mysqli_query($dbc1,$q2);
		}
		$dbc = mysqli_connect('localhost','lavvish','lavvish','lavvishproducts');
		$q1 = "ALTER TABLE `$categoryselect` ADD `image$count1` VARCHAR(50) NULL DEFAULT NULL";			
        $q2 = "UPDATE `$categoryselect` SET image$count1='$target' WHERE fieldname='$title'"; 
		mysqli_query($dbc,$q1);
		mysqli_query($dbc,$q2);
		$count1++;
		}
    }
}
/*********************************************/
?>