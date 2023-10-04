<?php
function selectCustomer(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `CustomerID`, `CustomerName`, `CustomerAddress` FROM `Customer` "); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
}

function selectCustomerswithproducts($iid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.ProductID, ProductName, ProductPrice, StoreName, StoreAddress FROM `Product` P join Store s on s.ProductID = P.ProductID where s.CustomerID=?"); 
        $stmt->bind_param("i", $iid);
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
