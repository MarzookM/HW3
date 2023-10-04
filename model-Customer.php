<?php
function selectCustomer(){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT CustomerID, CustomerName, CustomerAddress FROM 'Customer'"); //put code
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
