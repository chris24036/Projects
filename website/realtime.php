<?php
include("techcity.category.php");
include("techcity.product.php");
$totalCategories = Category::getTotalCategories();
$totalProducts = Product::getTotalItems();
$listpricetotal = Product::getTotalListPrice();
$doc = new DOMDocument("1.0");
$inventory = $doc->createElement("inventory");
$inventory = $doc->appendChild($inventory);
$categories = $doc->createElement("categories", $totalCategories);
$categories = $inventory->appendChild($categories);
$items = $doc->createElement("items", $totalProducts);
$items = $inventory->appendChild($items);
$listprice = $doc->createElement("listpricetotal", $listpricetotal);
$listprice = $inventory->appendChild($listprice);
$output = $doc->saveXML();
header("Content-type: application/xml");
echo $output;
?>
