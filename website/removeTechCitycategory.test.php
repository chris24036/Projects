<?php
error_log("\$_GET " . print_r($_GET, true));
include("techcity.category.php");
$TechCategoryID = $_GET['TechCategoryID'];
$category = Category::findCategory($TechCategoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $TechCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $TechCategoryID</h2>\n";


?>
