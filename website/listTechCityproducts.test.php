
//Christopher M. Rodriguez, 10/18/2024, IT202-001, Phase 2, cmr82@njit.edu
<?php
include("techcity.product.php");

// Fetch the products from the Product class
$products = Product::getProduct(); // Make sure this is the correct method name

// Check if products were retrieved successfully
if ($products && is_array($products)) {
    foreach ($products as $product) {
        // Ensure properties are accessible
        $TechProductID = $product->TechProductID;
        $name = "$TechProductID - $product->TechProductCode, $product->TechName"; // Using double quotes for cleaner syntax
        echo "<br>$name<br>";
    }
} else {
    echo "No products found.";
}
?>

