<h1>Employee</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Title</th>
      </tr>
    </thead>
    <tbody>
<?php                 //from control page
while($Employees = $Employee ->fetch_assoc())
  {
?>
<tr> 
  <td><?php echo $Employees['EmployeeID']; ?></td>
  <td><?php echo $Employees['EmployeeName']; ?></td>  
  <td><?php echo $Employees['EmployeeTitle']; ?></td>
<?php
    
  }
?>
<?php                 //from control page
while($Customers = $Customer ->fetch_assoc())
  {
?>
<tr> 
  <td><?php echo $Customers['CustomerID']; ?></td>
  <td><?php echo $Customers['CustomerName']; ?></td>  
  <td><?php echo $Customers['CustomerAddress']; ?></td>
  <td><a href = "Customers-with-products.php?ID=<?php echo $Customers['CustomerID']; ?>">Customers</a></td>
</tr>
<?php
      }
?>
      
    </tbody>


      
    </thead>
