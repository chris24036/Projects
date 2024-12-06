<?php
//Christopher M. Rodriguez, 10/18/2024, IT202-001, Phase 2, cmr82@njit.edu
include_once("techcity.category.php");

// Check if TechCategoryID is set in POST and GET
if (isset($_POST['TechCategoryID'])) {
    $TechCategoryID = $_POST['TechCategoryID'];
} else {
    die("TechCategoryID not set in POST request.");
}

// Ensure the values exist in GET or POST
$category = Category::findCategory($TechCategoryID);
if ($category) {
    $category->TechCategoryID = isset($_GET['TechCategoryID']) ? $_GET['TechCategoryID'] : $category->TechCategoryID;
    $category->TechCategoryCode = isset($_GET['TechCategoryCode']) ? $_GET['TechCategoryCode'] : $category->TechCategoryCode;
    $category->TechCategoryName = isset($_GET['TechCategoryName']) ? $_GET['TechCategoryName'] : $category->TechCategoryName;
    $category->ShelfNumber = isset($_GET['ShelfNumber']) ? $_GET['ShelfNumber'] : $category->ShelfNumber;
    
    $result = $category->updateCategory();
    if ($result) {
        echo "<h2>Category $TechCategoryID updated</h2>\n";
    } else {
        echo "<h2>Problem updating category $TechCategoryID</h2>\n";
    }
} else {
    echo "<h2>Category not found for TechCategoryID $TechCategoryID</h2>\n";
}
?>
