<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="get">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="TechProductID" size="4"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="TechName" size="20"></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="TechCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="TechListPrice" size="10"></td>
       </tr>
       <tr>
           <td>Color:</td>
           <td><input type="text" name="Color" size="10"></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="TechProductCode" size="10"></td>
       </tr>
       <tr>
           <td>Tech Description:</td>
           <td><input type="text" name="TechDescription" size="10"></td>
       </tr>
       <tr>
           <td>Tech Wholesale Price:</td>
           <td><input type="text" name="TechWholesalePrice" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addtechcityproduct">
</form>
