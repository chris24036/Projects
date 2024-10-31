<?php
if (!isset($_REQUEST['TechCategoryID']) or (!is_numeric($_REQUEST['TechCategoryID']))) {
?>
   <h2>You did not select a valid categoryID to view.</h2>
   <a href="index.php?content=listcategories">List Categories</a>
<?php
} else {
   $categoryID = $_REQUEST['TechCategoryID'];
   $category = Category::findCategory($TechCategoryID);
   if ($category) {
       echo $category;
       echo "<br><br>\n";
   } else {
       echo "<h2>Sorry, category $TechCategoryID not found</h2>\n";
   }
}
?>
