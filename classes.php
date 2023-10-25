<?php
require_once("util-db.php");
require_once("model-classes.php");
  
$pageTitle= "Classes";
include "view-header.php";

if (isset($_POST['actionType'])){
 switch($_POST ['actionType']){
   case "Add":
     insertClass($_POST['cNumber'], $_POST['cDescription']);
   break;
 }
 }
$classes = selectClasses();
include "view-classes.php";
include "view-footer.php";
?>
