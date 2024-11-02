<h2>Items</h2>
<ul>
<?php
include("techcity.product.php");

$products = Product::getProduct(); 

// Check if products were retrieved successfully
if ($products && is_array($products)) {
    foreach ($products as $product) {
        $TechProductID = $product->TechProductID;
        $name = "$TechProductID - $product->TechProductCode, $product->TechName"; // Using double quotes for cleaner syntax
        // Output each product as a list item
        echo "<li>$name</li>";
    }
} else {
    echo "<li>No products found.</li>";
}
?>
</ul>
