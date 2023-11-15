<?php
require_once("util-db.php");
require_once("model/trainers-with-classes.php");
  
$pageTitle= "Trainers with Classes";
include "view-header.php";
$trainers = selectTrainers();
include "view/trainers-with-classes/page.php";
include "view-footer.php";
?>
