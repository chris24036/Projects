//Christopher M. Rodriguez, 10/18/2024, IT202-001, Phase 2, cmr82@njit.edu
<?php
include("techcity.category.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $TechCategoryID = $category->TechCategoryID;
   $name = $TechCategoryID . " - " . $category->TechCategoryCode . ", " . $category->TechCategoryName;
   echo "$name<br>";
}
?>
