<?php
require_once("util-db.php");
require_once("model/suitor-profiles.php");
  
$pageTitle= "Suitor Profile";
include "view-header.php";
$trainers = selectTrainers();
include "view/suitor-profiles/page.php";
include "view-footer.php";
?>
