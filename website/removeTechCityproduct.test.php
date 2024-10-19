<?php
error_log("\$_GET " . print_r($_GET, true));
include("techcity.product.php");
$TechProductID = $_GET['TechProductID'];
$product = Product::findProduct($TechProductID);
$result = $product->removeProduct();
if ($result)
   echo "<h2>Product $TechProductID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing product $TechProductID</h2>\n";


?>
