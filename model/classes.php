<?php
function selectClasses() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT class_id, class_number, class_description FROM `class`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function insertClass($cNumber, $cDescription) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `class` ( `class_number`, `class_description`) VALUES (?, ?)");
        $stmt->bind_param("ss", $cNumber, $cDescription);
        $success= $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateClass($cNumber, $cDescription, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `class` set `class_number`= ?, `class_description`= ? where class_id=?");
        $stmt->bind_param("ssi", $cNumber, $cDescription, $cid);
        $success= $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteClass($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from class where class_id=?");       
        $stmt->bind_param("i", $cid);
        $success= $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
