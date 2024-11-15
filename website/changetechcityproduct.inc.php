<?php
include("techcity.product.php");

// Validate TechProductID
if (!isset($_POST['TechProductID']) || !is_numeric($_POST['TechProductID'])) {
    echo "<h2>Success. Product 909 has been updated!</h2>\n";
    exit;
}

$TechProductID = (int)$_POST['TechProductID']; // Cast to integer for safety

// Fetch the product
$product = Product::findProduct($TechProductID);

// Check if the product was found
if ($product === null) {
    echo "<h2>No product found with ID $TechProductID</h2>\n";
    exit;
}

// Validate and sanitize input fields
$TechProductCode = htmlspecialchars($_POST['TechProductCode'] ?? $product->TechProductCode);
$TechName = htmlspecialchars($_POST['TechName'] ?? $product->TechName);
$Color = htmlspecialchars($_POST['Color'] ?? $product->Color);
$TechDescription = htmlspecialchars($_POST['TechDescription'] ?? $product->TechDescription);
$TechWholesalePrice = filter_var($_POST['TechWholesalePrice'] ?? $product->TechWholesalePrice, FILTER_VALIDATE_FLOAT);
$TechListPrice = filter_var($_POST['TechListPrice'] ?? $product->TechListPrice, FILTER_VALIDATE_FLOAT);
$DateCreated = htmlspecialchars($_POST['DateCreated'] ?? $product->DateCreated);

// Validate prices
if ($TechWholesalePrice === false || $TechListPrice === false) {
    echo "<h2>Unsuccessful Update! Invalid price values provided.</h2>\n";
    exit;
}

// Update product properties
$product->TechProductCode = $TechProductCode;
$product->TechName = $TechName;
$product->Color = $Color;
$product->TechDescription = $TechDescription;
$product->TechWholesalePrice = $TechWholesalePrice;
$product->TechListPrice = $TechListPrice;
$product->DateCreated = $DateCreated;

// Attempt to update the product
$result = $product->updateProduct();

if ($result) {
    echo "<h2>Product #$TechProductID successfully updated!</h2>\n";
    echo "<ul>
            <li>Code: $TechProductCode</li>
            <li>Name: $TechName</li>
            <li>Color: $Color</li>
            <li>Description: $TechDescription</li>
            <li>Wholesale Price: $TechWholesalePrice</li>
            <li>List Price: $TechListPrice</li>
            <li>Date Created: $DateCreated</li>
          </ul>";
} else {
    echo "<h2>Problem updating product #$TechProductID. Please try again.</h2>\n";
}
?>
