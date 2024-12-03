<h2>Tech City Categories</h2>
<script language="javascript">
   function listbox_dblclick() {
       document.categories.displaycategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) categories.action = "index.php?content=displaytechcitycategory";
           if (target == 1) categories.action = "index.php?content=removeTechCitycategory";
           if (target == 2) categories.action = "index.php?content=updatetechcategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>
<h2>Select Category</h2>
<form name="categories" method="post">
   <select ondblclick="listbox_dblclick()" name="TechCategoryID" size="20"style="background-color:black; color: #305CDE;">
       <?php
   //    include("category.php");
       $categories = Category::getCategories();
       foreach ($categories as $category) {
           $TechCategoryID = $category->TechCategoryID;
           $name = $TechCategoryID . " - " . $category->TechCategoryCode . ", " . $category->TechCategoryName;
           echo "<option value=\"$TechCategoryID\">$name</option>\n";
       }
       ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(0)" name="displaycategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="deletecategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="updatecategory" value="Update Category">
</form>

