
//Christopher M. Rodriguez, 10/18/2024, IT202-001, Phase 2, cmr82@njit.edu

<h2>Select Item</h2>
<form name="items" method="post">
   <select name="itemID" size="20">
<?php
include("techcity.product.php");


$products = Product::getProduct(); 

// Check if products were retrieved successfully
if ($products && is_array($products)) {
    foreach ($products as $product) {
        $TechProductID = $product->TechProductID;
        $name = "$TechProductID - $product->TechProductCode, $product->TechName"; // Using double quotes for cleaner syntax
        echo "<br>$name<br>";
    }
} else {
    echo "No products found.";
}
?>
    </select>
</form>

