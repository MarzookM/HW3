<?php
require_once("util-db.php");
require_once("model-Product.php");
$pageTitle = "Customer";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertProduct($_POST['cNumber'], $_POST['cDesc']);
      break;
  }
}

$Product = selectProduct();
include "view-Product.php";
include "view-footer.php";
?>
