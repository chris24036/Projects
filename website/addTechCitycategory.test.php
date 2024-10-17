//Christopher M. Rodriguez, 10/18/2024, IT202-001, Phase 2, cmr82@njit.edu
<?php
include("techcity.category.php");
$TechCategoryID = $_GET['TechCategoryID'];
if ((trim($TechCategoryID) == '') or (!is_numeric($TechCategoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $TechCategoryCode = $_GET['TechCategoryCode'];
  $TechCategoryName = $_GET['TechCategoryName'];
  $TechCategory = new Category($TechCategoryID, $TechCategoryCode, $TechCategoryName);
  $result = $TechCategory->saveCategory();
  if ($result) {
      echo "<h2>New Category #$TechCategoryID successfully added</h2>\n";
      echo "<h2>$TechCategory</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>
