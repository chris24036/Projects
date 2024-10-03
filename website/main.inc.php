<?php
if (!isset($_SESSION['login'])) {
?>
    <h2 style="color:blue;">Welcome to TechCity Inventory Helper! Login below</h2><br>
    <form name="login" action="index.php" method="post">
        <label>Email:</label>
        <input type="text" name="emailAddress" size="25">
        <br>
        <br>
        <label>Password:</label>
        <input type="password" name="password" size="25">
        <br>
        <br>
        <input type="submit" value="Login">
        <input type="hidden" name="content" value="validate">
</form>
<?php
}else{
    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $pronouns = $_SESSION['pronouns'];
    echo "<h2>Hi $firstName $lastName($pronouns), Welcome to TechCity Inventory helper </h2>";
?>
   <p>This program tracks category and item inventory for TechCity</p>
   <p>TechCity is a store that sells technology gadgets.</p>
   <p>We sell items such as VR headsets, smart thermostats, and many other cool tech gadgets!</p>
   <a href="index.php?content=logout"><strong>Logout</strong></a>
<?php
}
?>



