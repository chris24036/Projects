<h2>Tech City Categories</h2>
<ul>
<?php
include_once("techcity.category.php");
$categories = Category::getCategories();
foreach ($categories as $category) {
   $TechCategoryID = $category->TechCategoryID;
   $name = $TechCategoryID . " - " . $category->TechCategoryCode . ", " . $category->TechCategoryName;
   // Output category as a list item
   echo "<li>$name</li>";
}
?>
</ul>