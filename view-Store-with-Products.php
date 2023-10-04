<h1>Store with Product</h1>
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
while($Stores = $Store ->fetch_assoc())
  {
?>
<tr> 
  
  <td><?php echo $Stores['ProductID']; ?></td>
  <td><?php echo $Stores['ProductName']; ?></td>  
  <td><?php echo $Stores['ProductPrice']; ?></td>
  <td><?php echo $Stores['StoreName']; ?></td>
  <td><?php echo $Stores['StoreAddress']; ?></td>  

</tr>
<?php
    
  }
?>
      
    </tbody>


      
    </thead>



      
    </thead>
