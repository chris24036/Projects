<?php
// include("category.php");
if (isset($_SESSION['login'])) {
   $TechCategoryID = filter_input(INPUT_POST, 'TechCategoryID', FILTER_VALIDATE_INT);
   if ((trim($TechCategoryID) == '') or (!is_int($TechCategoryID))) {
       echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
    }else if (Category::findCategory($TechCategoryID)) {
        echo "<h2>Sorry, A category with the ID #$TechCategoryID already exists</h2>\n";
 
   } else {
       $TechCategoryCode = htmlspecialchars($_POST['TechCategoryCode']);
       $TechCategoryName = htmlspecialchars($_POST['TechCategoryName']);
       $ShelfNumber = filter_input(INPUT_POST, 'ShelfNumber', FILTER_VALIDATE_INT);
       $category = new Category($TechCategoryID, $TechCategoryCode, $TechCategoryName,$ShelfNumber);
       $result = $category->saveCategory();
       if ($result)
           echo "<h2>New Category #$TechCategoryID successfully added</h2>\n";
       else
           echo "<h2>Sorry, there was a problem adding that category</h2>\n";
   }
} else {
   echo "<h2>Please log in first</h2>\n";
}
?>


