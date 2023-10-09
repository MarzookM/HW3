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
  $
?>
      </p>
        <p class="card-text"><small class="text-body-secondary">Address: <?php echo $Customers['CustomerAddress']; ?></small></p>
      </div>
    </div>
<tr> 
  <td><?php echo $Customers['CustomerID']; ?></td>
  <td><?php echo $Customers['CustomerName']; ?></td>  
  <td><?php echo $Customers['CustomerAddress']; ?></td>
  <td><a href = "Customers-with-products.php?ID=<?php echo $Customers['CustomerID']; ?>">Customers</a></td>
</tr>
<?php
    
  }
?>
</div>
