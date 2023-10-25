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

function selectCustomerForInput(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `CustomerID`, `CustomerName` FROM `Customer` order by CustomerName"); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectProductForInput(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `ProductID`, `ProductName` FROM `Product` order by ProductName"); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertStore($iid, $cid, $Cname, $Pname, $PPrice) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Store` (`CustomerID`, `ProductID`, `CustomerName`, `ProductName`, `ProductPrice`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss",$cid, $Cname, $Pname, $PPrice);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateStore($iid, $cid, $Cname, $Pname, $PPrice, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Store` SET `ProductName` = ?, `CustomerName` = ?, `ProductPrice` = ?, `CustomerID` = ? WHERE ProductID = ?");
        $stmt->bind_param("iisssi",$iid, $cid, $Cname, $Pname, $PPrice, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteStore($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Store WHERE StoreID = ?");
        $stmt->bind_param("i", $sid);
        $stmt->execute();
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
