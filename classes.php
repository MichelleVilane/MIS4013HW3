<?php
require_once("util-db.php");
require_once("model-classes.php");
  
$pageTitle= "Classes";
include "view-header.php";
$class = selectClasses();
include "view-classes.php";
include "view-footer.php";
?>
