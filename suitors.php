<?php
require_once("util-db.php");
require_once("model/trainers.php");
  
$pageTitle= "Suitors";
include "view-header.php";
$trainers = selectTrainers();
include "view/suitors.php";
include "view-footer.php";
?>
