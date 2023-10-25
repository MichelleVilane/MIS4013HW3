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
function selectTrainersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT trainer_id, trainer_name FROM `trainer` order by trainer_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectClassesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT class_id, class_number, class_description FROM `class` order by class_description");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectClassesByTrainer($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.class_id, class_number, class_description, daytime FROM `class`c join session s on s.class_id=c.class_id where s.trainer_id=?");
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



function insertDescription($tid, $cid,$cDescription, $daytime) {
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
function updateDescription($tid, $daytime,$cDescription) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `class` set `class_description`= ? where class_id=?");
        $stmt->bind_param("iss", $tid,$cDescription, $daytime);
        $success= $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteSession($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from class where class_id=?");       
        $stmt->bind_param("i", $tid);
        $success= $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
?>

