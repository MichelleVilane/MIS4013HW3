<?php
function selectClasses) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT class_id, class_descripion, class_descripion FROM `class`");
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
