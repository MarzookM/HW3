<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', DB_USER, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
