<?php
require_once("util-db.php");
require_once("model/classes-by-trainer.php");
  
$pageTitle= "Classes by Trainer";
include "view-header.php";
$class = selectClassesByTrainer($_GET['id']);
include "view/trainers-with-classes/page.php";
include "view-footer.php";
?>
