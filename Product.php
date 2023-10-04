<?php
require_once("util-db.php");
require_once("model-Product.php"); // going to create 
$pageTitle = "Customer";
include "view-header.php";
$Product = selectProduct();
include "view-Product.php"; //going to create
include "view-footer.php";
?> 
