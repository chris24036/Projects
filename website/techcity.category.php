<?php
require_once('database.php');
class Category{
    public $TechCategoryID;
    public $TechCategoryCode;
    public $TechCategoryName;
    public $ShelfNumber;
    function __construct($TechCategoryID,$TechCategoryCode,$TechCategoryName,$ShelfNumber){
        $this ->TechCategoryID = $TechCategoryID;
        $this ->TechCategoryCode = $TechCategoryCode;
        $this ->TechCategoryName = $TechCategoryName;
        $this ->ShelfNumber =$ShelfNumber;
    }
    function __toString(){
   
       $output = "<h2>Category Number: $this->TechCategoryID</h2>\n" .
           "<h2>$this->TechCategoryCode, $this->TechCategoryName</h2>\n";
       return $output;
    }
    function saveCategory(){
        $db = getDB();
        $query = "INSERT INTO TechGadgetCategories(TechCategoryID, TechCategoryCode, TechCategoryName, ShelfNumber, DateCreated) VALUES (?,?,?,?,NOW())";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issi",
            $this->TechCategoryID,
            $this->TechCategoryCode,
            $this->TechCategoryName,
            $this->ShelfNumber
            
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    static function getCategories(){
        $db = getDB();
        $query = "SELECT * FROM TechGadgetCategories";
        $result = $db->query($query);
        if(mysqli_num_rows($result) > 0){
            $categories = array();
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $category = new Category(
                    $row['TechCategoryID'],
                    $row['TechCategoryCode'],
                    $row['TechCategoryName'],
                    $row['ShelfNumber']

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
        $query = $query = "UPDATE TechGadgetCategories SET TechCategoryID = ?, TechCategoryCode =?, TechCategoryName = ?, ShelfNumber =? WHERE TechCategoryID = $this->TechCategoryID";
        $stmt = $db ->prepare($query);
        $stmt->bind_param(
            "issi",
            $this->TechCategoryID,
            $this->TechCategoryCode,
            $this->TechCategoryName,
            $this->ShelfNumber
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
                $row['TechCategoryName'],
                $row['ShelfNumber']
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
