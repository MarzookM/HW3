<?php
require_once("util-db.php");
require_once("model-instructor.php"); // going to create 
$pageTitle = "Instructors";
include "view-header.php";
$instructors = selectInstructors();
include "view-instructors.php"; //going to create
include "view-footer.php";
?> 
