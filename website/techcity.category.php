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


}