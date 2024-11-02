//Christopher M. Rodriguez, 10/18/2024, IT202-001, Phase 2, cmr82@njit.edu
<?php
include_once("techcity.product.php");
$TechProductID = $_GET['TechProductID'];
if ((trim($TechProductID) == '')) {
  echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} else {
  $TechProductCode = $_GET['TechProductCode'];
  $TechName = $_GET['TechName'];
  $color = $_GET['Color'];
  $TechDescription = $_GET['TechDescription'];
  $TechCategoryID = $_GET['TechCategoryID'];
  $TechWholesalePrice = $_GET['TechWholesalePrice'];
  $TechListPrice = $_GET['TechListPrice'];
  $DateCreated =date('Y-m-d H:i:s');
  $TechProduct = new Product($TechProductID, $TechProductCode, $TechName, $color,$TechDescription,$TechCategoryID,$TechWholesalePrice,$TechListPrice,$DateCreated);
  $result = $TechProduct->saveProduct();
  if ($result) {
      echo "<h2>New Product#$TechProductID successfully added</h2>\n";
      echo "<h2>$TechProductID</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that product</h2>\n";
  }
}
?>