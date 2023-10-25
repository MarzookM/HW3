<?php
function selectStore(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `StoreID`, `StoreName`, `StoreAddress` FROM `Store`  "); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertStore($cNumber, $cDesc){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Store` (`StoreAddress`, `StoreName`) VALUES (?,?)"); 
        $stmt->bind_param("ss", $cNumber, $cDesc);
        $success = $stmt->execute();
        $conn->close();
        return  $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateStore($cNumber, $cDesc, $cid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Store` set `StoreAddress` = ?, `StoreName` =? where `StoreID` = ?" ); 
        $stmt->bind_param("ssi", $cNumber, $cDesc, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteStore($cid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Store where StoreID =?"); 
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?> 

