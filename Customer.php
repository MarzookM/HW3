<?php
require_once("util-db.php");
require_once("model-Customer.php"); // going to create 
$pageTitle = "Customer";
include "view-header.php";
$customer = selectCustomer();
include "view-Customer.php"; //going to create
include "view-footer.php";
?> 
