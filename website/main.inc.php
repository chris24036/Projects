<?php
//--Christopher M. Rodriguez, IT202-001, Phase1 Assignment, cmr82@njit.edu
if (!isset($_SESSION['login'])) {
?>
    <h2 style="color:gray">Welcome to TechCity Inventory Helper! Login below</h2><br>
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
   <p>Managers will have the ability to adjust/create categories and items for.</p>
   <p>Tech City. Only authorized users have access to this application.</p>
   <p>All gadgets that are created must follow Tech City guidlines!</p>
<?php
}
?>



