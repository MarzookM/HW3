<?php
require_once("util-db.php");
require_once("model-Store-With-Employees.php"); // going to create 
$pageTitle = "Employees in Store";
include "view-header.php";
$Customer = selectCustomer();
include "view-Store-With-Employees.php"; //going to create
include "view-footer.php";
?> 
