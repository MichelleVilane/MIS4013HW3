<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'vilaneou_hw3user', 'F3uadDN.mM@Q', 'vilaneou_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
