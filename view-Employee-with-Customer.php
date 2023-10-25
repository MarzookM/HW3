<!DOCTYPE html>
<html>
<head>
  <title>Employees and Customers</title>
   <?php
include "view-Employee-with-Customer-newform.php"; 
?>
</head>
<body>
  <h1>Employees and Customers</h1>
  <div class="card-group">
    <?php             
    while ($Customers = $Customer->fetch_assoc()) {
    ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $Customers['CustomerName']; ?></h5>
        <p class="card-text">
          <ul class="list-group">
            <?php
            $Products = selectCustomerswithproducts($Customers['CustomerID']);
            while ($Product = $Products->fetch_assoc()) {
            ?>
            <li class="list-group-item">
              <?php echo $Product['ProductName']; ?> - <?php echo $Product['ProductPrice']; ?> - <?php echo $Product['ProductID']; ?>
            </li>
            <?php
            }
            ?>
          </ul>
        </p>
        <p class="card-text"><small class="text-muted">Address: <?php echo $Customers['CustomerAddress']; ?></small></p>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</body>
</html>
