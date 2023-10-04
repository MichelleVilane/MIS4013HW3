<?php
require_once("util-db.php");
require_once("model-trainers.php")
  
$pageTitle= "Home";
include "view-header.php";
$trainers = selectTrainers();
include "view-trainers.php";
include "view-footer.php";
?>
