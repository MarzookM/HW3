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



?>
