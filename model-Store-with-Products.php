<?php
function selectStorewithProducts($ccid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.ProductID, ProductName, ProductPrice, StoreName, StoreAddress FROM `Product` P join Store s on s.ProductID = P.ProductID where s.ProductID=?"); 
        $stmt->bind_param("i", $ccid);
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
