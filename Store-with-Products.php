<?php
require_once("util-db.php");
require_once("model-Store-with-Products.php"); // going to create 
$pageTitle = "Store with Products";
include "view-header.php";
$Store = selectStorewithProducts($_GET['cid']);
include "view-Store-with-Products.php"; //going to create
include "view-footer.php";
?> 
