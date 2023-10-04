<?php
require_once("util-db.php");
require_once("model-classes.php");
  
$pageTitle= "Classes";
include "view-header.php";
$class = selectClassess();
include "view-trainers.php";
include "view-footer.php";
?>
