<?php
//--Christopher M. Rodriguez, IT202-001, Phase1 Assignment, cmr82@njit.edu
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Inventory Helper</title>
<title>Inventory Helper</title>
    <link rel="stylesheet" type="text/css" href="ih_styles.css">
    <link rel="icon" type="image/png" href="images/logo.png">
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
