<?php
function selectAccountsByOwner($uEmail) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare(""); //put code
        $stmt->bind_param("s", $uEmail);
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
