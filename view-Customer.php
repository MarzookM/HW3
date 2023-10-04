<h1>Customer</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Office</th>
      </tr>
    </thead>
    <tbody>
<?php                 //from control page
while($Customer = $Customer ->fetch_assoc())
  {
?>
<tr> 
  <td><?php echo $Customer['CustomerID']; ?></td>
  <td><?php echo $Customer['CustomerName']; ?></td>  
  <td><?php echo $Customer['CustomerAddress']; ?></td>
</tr>
<?php
    
  }
?>
      
    </tbody>


      
    </thead>
