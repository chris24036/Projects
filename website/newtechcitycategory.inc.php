<h2>Enter New Category Information</h2>
<!--//Christopher M Rodriguez, November 15, 2024, IT202-001, Phase 4, cmr82@njit.edu-->
<form name="newtechcitycategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
          <td>Category ID:</td>
          <td><input type="number" name="TechCategoryID" size="4" min="100" max="999" required></td>
       </tr>
       <tr>
         <td>Category Code:</td>
        <td><input type="text" name="TechCategoryCode" size="20" placeholder="XXX" minlength="3" required></td>
       </tr>
       <tr>
           <td>Category Name:</td>
           <td><input type="text" name="TechCategoryName" size="50" required></td>
       </tr>
       <tr>
           <td>Shelf Number:</td>
           <td><input type="text" name="ShelfNumber" size="50" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addtechcitycategory">
</form>
