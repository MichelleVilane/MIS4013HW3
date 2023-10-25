<?php
require_once("util-db.php");
require_once("model-classes.php");
  
$pageTitle= "Classes";
include "view-header.php";

if (isset($_POST['actionType'])) {
 switch ($_POST ['actionType']) {
   case "Add":
    if (insertClass($_POST['cNumber'], $_POST['cDescription'])) {
      echo '<div class="alert alert-success" role="alert"> Course Added. </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error. </div>';
    }
   
     break;
   case "Delete":
    if (deleteClass($_POST['cNumber'], $_POST['cDescription'])) {
      echo '<div class="alert alert-success" role="alert"> Course Deleted. </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error. </div>';
    }
   
     break;
     }
 }
   
$classes = selectClasses();
include "view-classes.php";
include "view-footer.php";
?>
