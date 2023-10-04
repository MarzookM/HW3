<h1>Customer</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Address</th>
      </tr>
    </thead>
    <tbody>
<?php                 //from control page
while($Customers = $Customer ->fetch_assoc())
  {
?>
<tr> 
  <td><?php echo $Customers['CustomerID']; ?></td>
  <td><?php echo $Customers['CustomerName']; ?></td>  
  <td><?php echo $Customers['CustomerAddress']; ?></td>
  <td><a href = "Customers-with-products.php?fd=<?php echo $Customers['CustomerID']; ?>">Customers</a></td>
</tr>
<?php
    
  }
?>
      
    </tbody>


      
    </thead>
