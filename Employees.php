<?php
require_once("util-db.php");
require_once("model-Employees.php"); // going to create 
$pageTitle = "Employees";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if(insertEmployee($_POST['cNumber'], $_POST['cDesc'])){
        echo '<div class="alert alert-success" role="alert">Product Added.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if(updateEmployee($_POST['cDesc'], $_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Product edited.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
     if(deleteEmployee($_POST['cid'])){
        echo '<div class="alert alert-success" role="alert">Course Deleted.</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    
  }
}
$Employee = selectEmployee();
include "view-Employee.php"; //going to create
include "view-footer.php";
?> 
