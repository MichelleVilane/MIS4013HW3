<?php
function selectTrainers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT trainer_id, trainer_name, studio_number FROM `trainer`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


<?php
function selectClassesByTrainer($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.class_id, class_number, class_descripion, daytime FROM `class`c join session s on s.class_id=c.class_id where s.trainer_id=?");
        $stmt->bind_param("i", $tid);
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
