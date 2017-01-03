<?php
$dbname = 'reac_products';
if (!mysql_connect('localhost', 'root', 'apoorv')) {
    echo 'Could not connect to mysql';
    exit;
}
include 'header.php';
$sql = "SHOW TABLES FROM $dbname";
  $result = mysql_query($sql);
  while ($row = mysql_fetch_row($result)) {
    $categories= $row;
  }
mysql_free_result($result);
  if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
    }
    $query2 = "select * from master_products";
    $result1 = mysql_query($query2);
    $image = $result1['product_image'];
    $name = $result1['product_name'];
?>
<body>
  <div class="wrapper">
  <header class="header">
    <i class="[ icon  icon--grid ]  [ fa  fa-th ]  [ icon ]  active"></i>
    <i class="[ icon  icon--list ]  [ fa  fa-reorder ]  [ icon ]"></i>
  </header>
  <?php
$conn = mysqli_connect('localhost','root', 'apoorv', 'reac_products');
$sql = "SELECT * FROM master_products;";
$r = mysqli_query($conn,$sql);
$flag = 0;
while($data=mysqli_fetch_array($r)) { 
extract($data);
 if($flag == 4)
 {
	 $flag = 0;
 }
 if($flag == 0 )
 {
	 echo '';
 }

echo '<section class="products grid group">
    <h2>'.$product_category.'</h2>
    <article class="product">
      <div class="product__inner">
        <section class="product__image">
          <img src="'.$product_image.'"></img>
        </section>
    <section class="product_category">    
        <div class="product__details">
          <section class="product__name">'.$product_name.'</section>
          <section class="product__price">Rs. 1100/-</section>
          <section class="product__short-description">Random stuff about product</section>
          <div class="add-to-cart"><a href="product_profile.php?category='.$product_category.'&product='.$product_id.'" style="text-decoration:none; font-family:sans-serif;">Add to Cart</a></div>
        </div><!-- /product__details -->
      </div>
    </article><!-- /product -->
   </section><!-- /products -->';
if( $flag == 3)
{
echo '';
}
$flag = $flag + 1;
 }
?>
</div><!-- /wrapper -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script
    <script src="js/index.js"></script>
</body>
</html>
