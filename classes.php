<?php
require_once("util-db.php");
require_once("model/classes.php");
  
$pageTitle= "My Date Preferences";
include "view-header.php";

if (isset($_POST['actionType'])) {
 switch ($_POST ['actionType']) {
   case "Add":
    if (insertClass($_POST['cNumber'], $_POST['cDescription'])) {
      echo '<div class="alert alert-success" role="alert"> New Date Added! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error. </div>';
    }
     break;
     case "Edit":
    if (updateClass($_POST['cNumber'], $_POST['cDescription'], $_POST['cid'])) {
      echo '<div class="alert alert-success" role="alert"> Date Edited. </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error. </div>';
    }
     break;
   case "Delete":
    if (deleteClass($_POST['cid'])) {
      echo '<div class="alert alert-success" role="alert"> Date Cancelled. </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error. </div>';
    }
   
     break;
     }
 }
   
$classes = selectClasses();
include "view/classes/page.php";
include "view-footer.php";
?>

