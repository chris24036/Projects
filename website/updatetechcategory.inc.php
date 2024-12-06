<style>
   form[name="category"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="category"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="category"] input[type="text"] {
       width: 100%;
   }
   form[name="category"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
$TechCategoryID = $_POST['TechCategoryID'];
$category = Category::findCategory($TechCategoryID);
if ($category) {
?>
   <h2>Update Category <?php echo $TechCategoryID; ?></h2><br>
   <form name="category" action="index.php" method="post">
       <label for="categoryCode">Category Code:</label>
       <input type="text" name="TechCategoryCode" id="TechCategoryCode" value="<?php echo $category->TechCategoryCode; ?>">
       <label for="categoryName">Category Name:</label>
       <input type="text" name="TechcategoryName" id="categoryName" value="<?php echo $category->TechCategoryName; ?>">
       <input type="submit" name="answer" value="Update Category">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="TechCategoryID" value="<?php echo $TechCategoryID; ?>">
       <input type="hidden" name="content" value="changeTechCitycategory">
   </form>
   <?php
} else {
?>
   <h2>Sorry, category <?php echo $TechCategoryID; ?> not found</h2>
<?php
}
?>
<script language="javascript">
   document.category.categoryCode.focus();
   document.category.categoryCode.select();
</script>
