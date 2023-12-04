<?php
require_once("util-db.php");
require_once("model/classes-by-trainer.php");
  
$pageTitle= "Additional Information";
include "view-header.php";
$classes = selectClassesByTrainer($_GET['id']);
include "view/classes-by-trainer.php";
include "view-footer.php";
?>
