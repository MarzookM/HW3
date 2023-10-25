<?php
function selectEmployee(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `EmployeeID`, `EmployeeName`, `EmployeeTitle` FROM `Employee`"); 
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertEmployee($cNumber, $cDesc){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Employee` (`EmployeeTitle`, `EmployeeName`) VALUES (?,?)"); 
        $stmt->bind_param("ss", $cNumber, $cDesc);
        $success = $stmt->execute();
        $conn->close();
        return  $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateEmployee($cNumber, $cDesc, $cid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Employee` set `EmployeeTitle` = ?, `EmployeeName` =? where `EmployeeID` = ?" ); 
        $stmt->bind_param("ssi", $cNumber, $cDesc, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteEmployee($cid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Employee where EmployeeID =?"); 
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
