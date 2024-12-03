<?php
//Christopher M Rodriguez, November 15, 2024, IT202-001, Phase 4, cmr82@njit.edu
require_once('database.php');
include_once("techcity.category.php");
class Product{
    public $TechProductID;
    public $TechProductCode;
    public $TechName;
    public $Color;
    public $TechDescription;
    public $TechCategoryID;
    public $TechWholesalePrice;
    public $TechListPrice;
    public $DateCreated;
    function __construct($TechProductID,$TechProductCode,$TechName,$Color,$TechDescription,$TechCategoryID,$TechWholesalePrice,$TechListPrice,$DateCreated){
        $this->TechProductID = $TechProductID;
        $this->TechProductCode = $TechProductCode;
        $this->TechName = $TechName;
        $this-> Color = $Color;
        $this->TechDescription = $TechDescription;
        $this->TechCategoryID = $TechCategoryID;
        $this->TechWholesalePrice = $TechWholesalePrice;
        $this->TechListPrice = $TechListPrice;
        $this->DateCreated = $DateCreated;

    }
    function __toString(){
        $output = "<h2>Category Number: $this->TechProductID</h2>\n" .
            "<h2>$this->TechProductCode, $this->TechName, $this->Color,$this->TechDescription</h2>\n";
        return $output;
    }
    function saveProduct(){
        $db = getDB();
        $query = "INSERT INTO TechGadgetProducts(TechProductID,TechProductCode,TechName,Color,TechDescription,TechCategoryID,TechWholesalePrice,TechListPrice,DateCreated) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issssiiis",
            $this->TechProductID,
            $this->TechProductCode,
            $this->TechName,
            $this->Color,
            $this->TechDescription,
            $this->TechCategoryID,
            $this->TechWholesalePrice,
            $this->TechListPrice,
            $this->DateCreated

        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    static function getProduct(){
        $db = getDB();
        $query = "SELECT * FROM TechGadgetProducts";
        $result = $db->query($query);
        if(mysqli_num_rows($result) > 0){
            $products = array();
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $product = new Product(
                    $row['TechProductID'],
                    $row['TechProductCode'],
                    $row['TechName'],
                    $row['Color'],
                    $row['TechDescription'],
                    $row['TechCategoryID'],
                    $row['TechWholesalePrice'],
                    $row['TechListPrice'],
                    $row['DateCreated']
                );
                array_push($products, $product);
                unset($product);
            }
            $db->close();
            return $products;
        }else{
            $db->close();
            return NULL;
        }   

    }
    function updateProduct(){
        $db = getDB();
        $query = $query = "UPDATE TechGadgetProducts SET TechProductID = ?, TechProductCode =?, TechName = ?, Color =?, TechDescription=?, TechWholesalePrice=?,TechListPrice=?,DateCreated=? WHERE TechProductID = $this->TechProductID";
        $stmt = $db ->prepare($query);
        $stmt->bind_param(
            "issssiis",
            $this->TechProductID,
            $this->TechProductCode,
            $this->TechName,
            $this->Color,
            $this->TechDescription,
            $this->TechWholesalePrice,
            $this->TechListPrice,
            $this->DateCreated
        );
        $result = $stmt->execute();
        $db->close();
        $stmt->close();
        return $result;
    }
    static function findProduct($TechProductID){
        $db = getDB();
        $query = "SELECT * FROM TechGadgetProducts WHERE TechProductID = $TechProductID";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($row){
            $product = new Product(
                $row['TechProductID'],
                $row['TechProductCode'],
                $row['TechName'],
                $row['Color'],
                $row['TechDescription'],
                $row['TechCategoryID'],
                $row['TechWholesalePrice'],
                $row['TechListPrice'],
                $row['DateCreated']

            );
            $db->close();
            return $product;
        }else{
            $db->close();
            return NULL;
        }
    }
    function removeProduct(){
        $db = getDB();
        $query = "DELETE FROM TechGadgetProducts WHERE TechProductID = $this->TechProductID";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
    static function getTotalItems()
{
   $db = getDB();
   $query = "SELECT count(TechProductID) FROM TechGadgetProducts";
   $result = $db->query($query);
   $row = $result->fetch_array();
   if ($row) {
       return $row[0];
   } else {
       return NULL;
   }
}
static function getTotalListPrice(){
   $db = getDB();
   $query = "SELECT sum(TechListPrice) FROM TechGadgetProducts";
   $result = $db->query($query);
   $row = $result->fetch_array();
   if ($row) {
       return $row[0];
   } else {
       return NULL;
   }
}
}