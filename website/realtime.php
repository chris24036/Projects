<?php
ob_start(); // Start output buffering to prevent early output
header("Content-type: application/xml");
include("techcity.category.php");
include("techcity.product.php");
// Create the XML document
$doc = new DOMDocument("1.0");
// Generate the XML content
$totalCategories = Category::getTotalCategories();
$totalProducts = Product::getTotalItems();
$listpricetotal = Product::getTotalListPrice();
$wholesaleprice = Product::getTotalWholesalePrice();
$inventory = $doc->createElement("inventory");
$inventory = $doc->appendChild($inventory);
$categories = $doc->createElement("categories", $totalCategories);
$categories = $inventory->appendChild($categories);
$items = $doc->createElement("items", $totalProducts);
$items = $inventory->appendChild($items);
$listprice = $doc->createElement("listpricetotal", $listpricetotal);
$listprice = $inventory->appendChild($listprice);
$wholesaleprice = $doc->createElement("wholesaleprice", $wholesaleprice);
$wholesaleprice = $inventory->appendChild($wholesaleprice);
// Ensure no unexpected output before this point
$output = ob_get_clean(); 
// If there is any output captured, log or inspect it
if (trim($output) != "") {
    error_log("Debug: Output detected before XML:\n" . htmlspecialchars($output));
    exit; 
}
echo $doc->saveXML();
