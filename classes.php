<?php
require_once("util-db.php");
require_once("model-classes.php");
  
$pageTitle= "Classes";
include "view-header.php";
$classes = selectClassess();
include "view-classess.php";
include "view-footer.php";
?>
