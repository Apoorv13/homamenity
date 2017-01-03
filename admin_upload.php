
<html>
<body>
<form enctype="multipart/form-data" action="img_db.php" method="POST">
Product Title: <input type="text" name="img_title" /><br /><br />
Product Description: <input type="text" name="img_desc" /><br /><br />
Choose a file to upload: <input name="uploadedfile" type="file" /><br /><br />
Product Cost: <input type="text" name="img_cost"/><br/><br/>
Product Stock: <br/>Yes<input type="radio" name="img_stock"/><br/>
No<input type="radio" name="img_stock"/><br/><br/>
<input name="submit" type="submit" value="submit" />
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
$img_title=$_POST["img_title"];
$img_desc=$_POST["img_desc"];
}
$img_name=$_FILES["uploadedfile"]["name"];
if (($_FILES["uploadedfile"]["type"]=="image/gif"
|| $_FILES["uploadedfile"]["type"]=="image/jpeg"
|| $_FILES["uploadedfile"]["type"]=="image/pjpeg"
&& $_FILES["uploadedfile"]["size"]<20000))
{
if ($_FILES["uploadedfile"]["error"]>0)
{
echo "Return Code:".$_FILES["uploadedfile"]["error"]."<br />";
}
else
{
$i=1;
$success=false;
$new_img_name=$img_name;
while(!$success)
{
if (file_exists("uploads/".$new_img_name))
{
$i++;
$new_img_name="$i".$img_name;
}
else
{
$success=true;
}
}
move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],"uploads/".$new_img_name);
echo "Stored in: "."uploads/".$new_img_name;
echo "<br />";
$qry="INSERT INTO images(img_title,img_desc,img_filename)
VALUES('$img_title','$img_desc','$new_img_name')";
if(!mysql_query($qry))
{
die("An error".mysql_error());
}
else
{
echo "1 row added";
}
}
}
else
{
echo "Invalid file";
}
?>