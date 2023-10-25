<?php
require_once("util-db.php");
require_once("model-Product.php"); // going to create 
$pageTitle = "Customer";
include "view-header.php";

if(isset($_POST['actionType'])){
  switch($_POST['actionType'])){
    case "Add":
      insertProduct($_POST['cNumber'], $_POST['cDesc']);
      break;
  }
}


$Product = selectProduct();
include "view-Product.php"; //going to create
include "view-footer.php";
?> 
