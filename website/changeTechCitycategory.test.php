//Christopher M. Rodriguez, 10/18/2024, IT202-001, Phase 2, cmr82@njit.edu
<?php
include("category.php");
$categoryID = $_GET['categoryID'];
$category = Category::findCategory($TechCategoryID);
$category->TechCategoryID = $_GET['TechCategoryID'];
$category->TechCategoryCode = $_GET['TechCategoryCode'];
$category->TechCategoryName = $_GET['TechCategoryName'];
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $TechCategoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $TechCategoryID</h2>\n";
}
?>
