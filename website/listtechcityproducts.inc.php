<!-- Christopher M Rodriguez IT202-001 Phase 5 November 30, 2024 -->
<script language="javascript">
   function listbox_dblclick() {
       document.items.updateitem.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this item?");
       }
       if (userConfirmed) {
           if (target == 1) items.action = "index.php?content=removeTechCityproduct";
           if (target == 2) items.action = "index.php?content=updatetechproduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>
<h2 style = color:gray>Select Item</h2>
<form name="items" method="post">
   <select ondblclick="listbox_dblclick()" name="TechProductID" size="20" style="background-color:black; color: #305CDE;">
       <?php
       //include("techcity.product.php");
       $products = Product::getProduct();
       foreach ($products as $product) {
           $TechProductID = $product->TechProductID;
           $TechName = $product->TechName;
           $option = $TechProductID . " - " . $TechName;
           echo "<option value=\"$TechProductID\">$option</option>\n";
       }
       ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(1)" name="deletproduct" value="Delete Item">
   <input type="submit" onClick="button_click(2)" name="updateproduct" value="Update Item">
</form>

