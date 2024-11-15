<?php
//Christopher M Rodriguez, November 15, 2024, IT202-001, Phase 4, cmr82@njit.edu



include_once("techcity.product.php");
//nclude_once("changetechcityproduct.inc.php");
if (!isset($_POST['TechProductID']) or (!is_numeric($_POST['TechProductID']))) {
?>
   <h2>You did not select a valid product ID value</h2>
   <a href="index.php?content=listtechcityproducts">List items</a>
   <?php
} else {
   $TechProductID = $_POST['TechProductID'];
   $product = Product::findProduct($TechProductID);
   if ($product) {
   ?>
       <h2>Update Product <?php echo $product->TechProductID; ?></h2><br>
       <form name="products" action="index.php" method="post">
           <table>
               <tr>
                   <td>TechProductID</td>
                   <td><?php echo $product->TechProductID; ?></td>
               </tr>
               <tr>
               <td>Name</td>
                   <td><input type="text" name="TechProductName" value="<?php echo $product->TechName; ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
               <td><input type="text" name="TechCategoryID" value="<?php echo $product->TechCategoryID; ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                 <td><input type="number" name="TechlistPrice" value="<?php echo $product->TechListPrice; ?>"></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Item">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="itemID" value="<?php echo $TechProductID; ?>">
           <input type="hidden" name="content" value="changetechcityproduct">
       </form>
   <?php
    }else {
        ?>
            <h2>Sorry, product <?php echo $TechProductID; ?> not found</h2>
            <a href="index.php?content=listtechcityproducts">List items</a>
    <?php
        }
    }
    ?>
     
