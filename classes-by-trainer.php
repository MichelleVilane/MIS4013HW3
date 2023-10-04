<?php
require_once("util-db.php");
require_once("model-classes-by-trainer.php");
  
$pageTitle= "Classes by Trainer";
include "view-header.php";
$trainers = selectClassesByTrainer();
include "view-classes-by-trainer.php";
include "view-footer.php";
?>
