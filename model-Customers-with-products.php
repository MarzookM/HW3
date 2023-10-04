<?php
function selectCustomerswithproducts($iid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.ProductID, ProductName, ProductPrice, StoreName, StoreAddress FROM `Product` P join Store s on s.ProductID = P.ProductID where s.CustomerID=?"); 
        $stmt->blind_param("i", $iid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
