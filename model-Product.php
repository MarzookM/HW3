<?php
function selectProduct(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `ProductID`, `ProductName`, `ProductPrice` FROM `Product`  "); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertProduct($cNumber, $cDesc){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Product` (`ProductPrice`, `ProductName`) VALUES (?,?)"); 
        $stmt->bind_param("ss", $cNumber, $cDesc);
        $success = $stmt->execute();
        $conn->close();
        return  $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateProduct($cNumber, $cDesc, $cid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Product` set `ProductPrice` = ?, `ProductName` =? where `ProductID` = ?" ); 
        $stmt->bind_param("ssi", $cNumber, $cDesc, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteProduct($jid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from course where ProductID =?"); 
        $stmt->bind_param("j", $jid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
         } 
    catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
