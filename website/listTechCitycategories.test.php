//Christopher M. Rodriguez, 10/18/2024, IT202-001, Phase 2, cmr82@njit.edu
<?php
include("category.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $categoryID = $category->categoryID;
   $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName;
   echo "$name<br>";
}
?>
