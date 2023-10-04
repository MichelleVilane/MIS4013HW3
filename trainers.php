<?php
require_once("util-db.php");
require_once("model-trainers.php");
  
$pageTitle= "Trainers";
include "view-header.php";
$trainers = selecttrainers();
include "view-trainers.php";
include "view-footer.php";
?>
