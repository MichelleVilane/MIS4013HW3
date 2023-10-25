<?php
function selectSessionByClass($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.class_id, class_number, class_descripion, daytime FROM `class`c join session s on s.class_id=c.class_id where s.class_id=?");
        $stmt->bind_param("i", $cid);
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
