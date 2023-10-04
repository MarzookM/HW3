<h1>Product</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      </tr>
    </thead>
    <tbody>
<?php                 //from control page
while($Products = $Product ->fetch_assoc())
  {
?>
<tr> 
  <td><?php echo $Customers['ProductID']; ?></td>
  <td><?php echo $Customers['ProductName']; ?></td>  
  <td><?php echo $Customers['ProductPrice']; ?></td>

</tr>
<?php
    
  }
?>
      
    </tbody>


      
    </thead>
