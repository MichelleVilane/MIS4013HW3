<?php
require_once("util-db.php");
require_once("model/trainers-chart-db.php");
  
$pageTitle= "Trainers Chart";
include "view-header.php";
$trainers = selectTrainers();
include "view/trainers-chart/page.php";
include "view-footer.php";
?>
