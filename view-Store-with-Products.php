<h1>Customers with Product</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Store Name</th>
      <th>Store Address</th>
      </tr>
    </thead>
    <tbody>
<?php                 //from control page
while($Products = $Product ->fetch_assoc())
  {
?>
<tr> 
  
  <td><?php echo $Products['ProductID']; ?></td>
  <td><?php echo $Products['ProductName']; ?></td>  
  <td><?php echo $Products['ProductPrice']; ?></td>
  <td><?php echo $Products['StoreName']; ?></td>
  <td><?php echo $Products['StoreAddress']; ?></td>  

</tr>
<?php
    
  }
?>
      
    </tbody>


      
    </thead>
