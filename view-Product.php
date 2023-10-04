<h1>Product</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
        <th></th>
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
  <td>
 
    <form method ="post" action="Store-with-Products.php">
         <a href = "Store-with-Products.php?cid=<?php echo $Products['ProductID']; ?>">
          <button type="submit" class="btn btn-primary">Products</button>
    </form>
  </td>

</tr>
<?php
    
  }
?>
      
    </tbody>


      
    </thead>
