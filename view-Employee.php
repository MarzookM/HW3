<h1>Employee</h1>
<div class ="card-group">
<?php
while($Employees = $Employee->fetch_assoc()) {
  ?>
  <div class = "card">
    <div class="card-body">
    <h5 class ="card-title"><?php echo $Employees['EmployeeName']; ?></h5>
    <p class ="card-text">
    <ul class="list-group">
  <?php
    $Product = selectCustomerswithproducts($Employees[EmployeeName]);
    while($Product = $Product->fetch_assoc()){
      ?>
        <td><?php echo $Products['ProductID']; ?></td>
        <td><?php echo $Products['ProductName']; ?></td>  
        <td><?php echo $Products['ProductPrice']; ?></td>
      <?php
    }
  ?>
    </ul>
    </p>
      <p class="card-text"><small class="text-body-secondary">Office: <?php echo $Employees['EmployeeTitle']; ?></small></p>
      
    </div>
  </div>
  <?php
}
?>
  
