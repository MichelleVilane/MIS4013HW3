<?php
require_once("util-db.php");
require_once("model/classes-by-trainer.php");
  
$pageTitle= "Activities";
include "view-header.php";
$classes = selectClassesByTrainer($_GET['id']);
include "view/classes-by-trainer.php";
include "view-footer.php";
?>
