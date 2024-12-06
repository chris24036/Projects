<?php
//--Christopher M. Rodriguez, IT202-001, Phase1 Assignment, cmr82@njit.edu
session_start();
include("techcity.category.php");
include("techcity.product.php");
?>
<!DOCTYPE html>
<html>
<head><title>Inventory Helper</title>
<title>Inventory Helper</title>
    <link rel="stylesheet" type="text/css" href="ih_styles.css">
    <link rel="icon" type="image/png" href="images/logo.png">
    <style>
        #logo {
            display: block;
            margin: 20px auto;
            max-width: 150px; /* Adjust size as needed */
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <?php include("header.inc.php"); ?>
    </header>
    <section style="height: 375px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>
   <section id="container">
       <main>
       
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>
<script language="javascript" type="text/javascript">
   function getRealTime() {
       // retrieve the DOM objects to place the content
       var domcategories = document.getElementById("categorycount");
       var domitems = document.getElementById("itemcount");
       var domlistpricetotal = document.getElementById("listpricetotal");
       var domwholesaleprice = document.getElementById("wholesaleprice");
       //send the GET request to retrieve the data
       var request = new XMLHttpRequest();
       request.open("GET", "realtime.php", true);
       request.onreadystatechange = function() {
           if (request.readyState == 4 && request.status == 200) {
               //parse the XML document to get each data element
               var xmldoc = request.responseXML;
               var xmlcategories = xmldoc.getElementsByTagName("categories")[0];
               var categories = xmlcategories.childNodes[0].nodeValue;
               var xmlitems = xmldoc.getElementsByTagName("items")[0];
               var items = xmlitems.childNodes[0].nodeValue;
               var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
               var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;
               var xmlwholesaleprice = xmldoc.getElementsByTagName("wholesaleprice")[0];
               var wholesaleprice = xmlwholesaleprice.childNodes[0].nodeValue;
               domcategories.innerHTML = categories;
               domitems.innerHTML = items;
               domlistpricetotal.innerHTML = listpricetotal;
               domwholesaleprice.innerHTML = wholesaleprice;
           }
       };
       request.send();
   }
</script>
<aside>
           <?php include("aside.inc.php"); ?>
           <script language="javascript" type="text/javascript" >
               getRealTime();
               setInterval(getRealTime, 5000);
           </script>
        </aside>
