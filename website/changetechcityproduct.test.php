

<?php
include("techcity.product.php");

$TechProductID = $_GET['TechProductID'];
$product = Product::findProduct($TechProductID);

if ($product === null) {
    echo "<h2>No product found with ID $TechProductID</h2>\n";
    exit; // Stop the script if the product isn't found
}

// Proceed with updating the product details
$product->TechProductCode = $_GET['TechProductCode'];
$product->TechName = $_GET['TechName'];
$product->Color = $_GET['Color'];
$product->TechDescription = $_GET['TechDescription'];
$product->TechWholesalePrice = $_GET['TechWholesalePrice'];
$product->TechListPrice = $_GET['TechListPrice'];
$product->DateCreated = $_GET['DateCreated'];

$result = $product->updateProduct();
if ($result) {
    echo "<h2>Product $TechProductID updated</h2>\n";
} else {
    echo "<h2>Problem updating product $TechProductID</h2>\n";
}
?>

