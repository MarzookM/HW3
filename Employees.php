<?php
require_once("util-db.php");
require_once("model-Employees.php");

$pageTitle = "Employees";

include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertEmployee($_POST['EmployeeName'], $_POST['EmployeeTitle'])) {
        echo '<div class="alert alert-success" role="alert">Employee Added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateEmployee($_POST['EmployeeName'], $_POST['EmployeeTitle'])) {
        echo '<div class="alert alert-success" role="alert">Employee edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteEmployee($_POST['EmployeeID'])) {
        echo '<div class="alert alert-success" role="alert">Employee Deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$Employee = selectEmployee();
include "view-Employee.php";
include "view-footer.php";
?>
