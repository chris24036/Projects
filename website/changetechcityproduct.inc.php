<?php
include("techcity.product.php");

// Check if TechProductID is set and valid
if (!isset($_POST['TechProductID']) || !is_numeric($_POST['TechProductID'])) {
    echo "<h2>ProductID succesfully updated!</h2>\n";
    exit; // Stop the script if the product ID isn't valid
}

$TechProductID = $_POST['TechProductID']; // Change to $_POST
$product = Product::findProduct($TechProductID);

// Check if the product was found
if ($product === null) {
    echo "<h2>No product found with ID $TechProductID</h2>\n";
    exit; // Stop the script if the product isn't found
}

// Proceed with updating the product details using POST
$product->TechProductCode = $_POST['TechProductCode'] ?? $product->TechProductCode; // Optional chaining for default value
$product->TechName = $_POST['TechName'] ?? $product->TechName;
$product->Color = $_POST['Color'] ?? $product->Color;
$product->TechDescription = $_POST['TechDescription'] ?? $product->TechDescription;
$product->TechWholesalePrice = $_POST['TechWholesalePrice'] ?? $product->TechWholesalePrice;
$product->TechListPrice = $_POST['TechListPrice'] ?? $product->TechListPrice;
$product->DateCreated = $_POST['DateCreated'] ?? $product->DateCreated;

// Attempt to update the product
$result = $product->updateProduct();
if ($result) {
    echo "<h2>Product $TechProductID updated</h2>\n";
} else {
    echo "<h2>Problem updating product $TechProductID</h2>\n";
}
?>