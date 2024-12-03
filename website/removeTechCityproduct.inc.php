<?php
// Christopher M Rodriguez IT202-001 Phase 5 December 3, 2024
include("techcity.product.php");

if (isset($_SESSION['login'])) {
    // Check if 'TechProductID' is present in the POST request
    if (isset($_POST['TechProductID'])) {
        $TechProductID = $_POST['TechProductID'];

        // Ensure the Product ID is valid before proceeding
        if (!empty($TechProductID)) {
            $product = Product::findProduct($TechProductID);
            $result = $product->removeProduct();

            if ($result) {
                echo "<h2>Item $TechProductID removed</h2>\n";
            } else {
                echo "<h2>Sorry, problem removing item $TechProductID</h2>\n";
            }
        } else {
            echo "<h2>Invalid Product ID provided</h2>\n";
        }
    } else {
        echo "<h2>Product ID not set in the request</h2>\n";
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
