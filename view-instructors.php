<h1>Instructors</h1>
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
while($instructor = $instructors -> fetch_assoc())
  {
?>
<tr> 
  <td><?php echo $instructor['instructor_id']; ?></td>
  <td><?php echo $instructor['instructor_id']; ?></td>  
  <td><?php echo $instructor['instructor_id']; ?></td>
</tr>
<?php
    
  }
?>
      
    </tbody>


      
    </thead>
