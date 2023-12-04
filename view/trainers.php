<h1>Suitors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
       <th>Name</th>
       <th>Preferred Location</th>
        <th></th>
      </tr>
      
    </thead>
      <tbody>
        <?php

    <p>Hello, Michelle! Welcome back to your Cupid's Bow user portal. Here is a list of your potential dates and their preferred location to meet. 
    to make or cancel a date with any suitor, click the 'additional information' hyperlink. Goodluck!</p>
        <br></br>
while ($trainer=$trainers -> fetch_assoc()) {
?>
  <tr>
    <td><?php echo $trainer['trainer_id'];?></td>
    <td><?php echo $trainer['trainer_name'];?></td>
    <td><?php echo $trainer['studio_number'];?></td>
    <td><a href="classes-by-trainer.php?id=<?php echo $trainer['trainer_id']; ?>">Classes</a></td>
  </tr>
  <?php
  
}
       ?>
      </tbody>
  </table>
</div>
