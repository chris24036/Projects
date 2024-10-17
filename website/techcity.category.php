<?php
require_once('database.php');
class Category{
    public $TechCategoryID;
    public $TechCategoryCode;
    public $TechCategoryName;
    function __construct($TechCategoryID,$TechCategoryCode,$TechCategoryName){
        $this ->TechCategoryID = $TechCategoryID;
        $this ->TechCategoryCode = $TechCategoryCode;
        $this ->TechCategoryName = $TechCategoryName;
    }
    function __toString(){
   
       $output = "<h2>Category Number: $this->TechCategoryID</h2>\n" .
           "<h2>$this->TechCategoryCode, $this->TechCategoryName</h2>\n";
       return $output;
    }
    function saveCategory(){
        $db = getDB();
        $query = "INSERT INTO TechGadgetCategories VALUES (?,?,?)";
        $stmt = $db -> prepare($query);
        $stmt->bind_param(
            "iss",
            $this->TechCategoryID,
            $this->TechCategoryCode,
            $this->TechCategoryName
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    static function getCategories(){
        $db = getDB();
        $query = "SELECT * FROM TechGadgetCategories";
<<<<<<< HEAD
        $result = $db->query($query);
        if(mysqli_num_rows($result) > 0){
            $categories = array();
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $category = new Category(
                    $row['$TechCategoryID'],
                    $row['$TechCategoryCode'],
                    $row['$TechCategoryName'] 
=======
        $result = db->query($query);
        if(mysqli_num_rows($result) > 0){
            $categories = array();
            while($row = $result-> fethc_array(MYSQLI_ASSOC)){
                $category = new Category(
                    row["$TechCategoryID"],
                    row["$TechCategoryCode"],
                    row["$TechCategoryName"] 
>>>>>>> d01aebd18b324454aac5dbd776d95efb932a24eb

                );
                array_push($categories, $category);
                unset($category);
            }
            $db->close();
            return $categories;
        }else{
            $db->close();
            return NULL;
        }   
<<<<<<< HEAD

    }
    function updateCategory(){
        $db = getDB();
        $query = $query = "UPDATE TechGadgetCategories SET TechCategoryID = ?, TechCategoryCode =?, TechCategoryName = ? WHERE TechCategoryID = $this->TechCategoryID";
        $stmt = $db ->prepare($query);
        $stmt->bind_param(
            "iss",
            $this->TechCategoryID,
            $this->TechCategoryCode,
            $this->TechCategoryName
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    static function findCategory($TechCategoryID){
        $db = getDB();
        $query = "SELECT * FROM TechGadgetCategories WHERE TechCategoryID = $TechCategoryID";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($row){
            $category = new Category(
                $row['TechCategoryID'],
                $row['TechCategoryCode'],
                $row['TechCategoryName']
            );
            $db->close();
            return $category;
        }else{
            $db->close();
            return NULL;
        }
    }
    function removeCategory(){
        $db = getDB();
        $query = "DELETE FROM TechGadgetCategories WHERE TechCategoryID = $this->TechCategoryID";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
}
?>

=======
>>>>>>> d01aebd18b324454aac5dbd776d95efb932a24eb

    }
    function updateCategory(){
        $db = getDB();
        $query = "UPDATE TechGadgetCategories WHERE TechCategoryID = ?, TechCategoryCode =?, TechCategoryName = ?, WHERE TechCategoryID = $this->TechCategoryID"
        $stmt = $db->prepare($query);
        $stmt_.bind_param(
            "lnn",
            $this->TechCategoryID,
            $this->TechCategoryCode,
            $this->TechCategoryName
        );
        $result = $stmr->execute();
        $db->close();
        return $reult;
    }

<<<<<<< HEAD
=======
    static function findCategory($TechCategoryID){
        $db = getDB();
        $query = "SELECT * FROM TechGadgetCategories WHERE TechCategoryID = $TechCategoryID";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($row){
            $category = new Category(
                $row['TechCategoryID'],
                $row['TechCategoryCode'],
                $row['TechCategoryName']
            );
            $db->close();
            return $category;
        }else{
            $db->close();
            return NULL;
        }
    }
    function removeCategory(){
        $db = getDB();
        $query = "DELETE FROM TechGadgetCategories WHERE TechCategoryID = $this->TechCategoryID";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
}
?>
>>>>>>> d01aebd18b324454aac5dbd776d95efb932a24eb
