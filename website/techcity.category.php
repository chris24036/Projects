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
            "???",
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
        $result = db->query($query);
        if(mysqli_num_rows($result) > 0){
            $categories = array();
            while($row = $result-> fethc_array(MYSQLI_ASSOC)){
                $category = new Category(
                    row["$TechCategoryID"],
                    row["$TechCategoryCode"],
                    row["$TechCategoryName"] 

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