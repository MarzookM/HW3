<?php
require_once("util-db.php");
require_once("model-Employee-with-Customer.php"); // going to create 
$pageTitle = "Employees in Store";
include "view-header.php";
$Customer = selectCustomer();
include "view-Employee-with-Customer.php"; //going to create
include "view-footer.php";
?> 
