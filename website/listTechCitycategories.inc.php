//Christopher M. Rodriguez, 10/18/2024, IT202-001, Phase 2, cmr82@njit.edu
<h2>Select Category</h2>
<form name="categories" method="post">
   <select name="categoryID" size="20">
<?php
include("techcity.category.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $TechCategoryID = $category->TechCategoryID;
   $name = $TechCategoryID . " - " . $category->TechCategoryCode . ", " . $category->TechCategoryName;
   echo "$name<br>";
}
?>
   </select>
</form>
