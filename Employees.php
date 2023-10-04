<?php
require_once("util-db.php");
require_once("model-Employees.php"); // going to create 
$pageTitle = "Employees";
include "view-header.php";
$Customer = selectCustomer();
include "view-Employee.php"; //going to create
include "view-footer.php";
?> 
