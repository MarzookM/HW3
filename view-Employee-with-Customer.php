<h1>Employees and Customer</h1>
<div class="card-group">
<?php             
while($Customers = $Customer ->fetch_assoc())
  {
?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $Customers['CustomerName']; ?></h5>
        <p class = "card-text">
        <ul class="list-group">
<?php
  $Products = selectCustomerswithproducts($Customer['CustomerID']);
  while($Products = $Product->fetch_assoc()){
?>
  <li class="list-group-items"><?php echo $Products['ProductName']; ?> - <?php echo $Products['ProductPrice']; - <?php echo $Products['ProductID']; ?> - </li>
  <td><?php echo $Products['ProductID']; ?></td>
  <td><?php echo $Products['ProductName']; ?></td>  
  <td><?php echo $Products['ProductPrice']; ?></td>
  <?php
 
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Address: <?php echo $Customers['CustomerAddress']; ?></small></p>
      </div>
    </div>
    <?php
  }
?>
</div>
