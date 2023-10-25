<?php
require_once("util-db.php");
require_once("model-Employees.php");

$pageTitle = "Employees";

include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertEmployee($_POST['employeeName'], $_POST['employeeDescription'])) {
        echo '<div class="alert alert-success" role="alert">Employee Added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateEmployee($_POST['employeeDescription'], $_POST['employeeId'])) {
        echo '<div class="alert alert-success" role="alert">Employee edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteEmployee($_POST['employeeId'])) {
        echo '<div class="alert alert-success" role="alert">Employee Deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$Employees = selectEmployee();
include "view-Employees.php";
include "view-footer.php";
?>
