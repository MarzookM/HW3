<?php
require_once("util-db.php");
require_once("model-Customers-with-products.php"); // going to create 
$pageTitle = "Customer with Products";
include "view-header.php";
$Product = selectCustomerswithproducts($_GET['ID']);
include "view-Customers-with-products.php"; //going to create
include "view-footer.php";
?> 
