<h1>Suitors</h1>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    <p>Hello, Michelle! Welcome back to your Cupid's Bow user portal. Here is a list of your potential dates and their preferred location to meet. 
    to make or cancel a date with any suitor, click the 'additional information' hyperlink. Goodluck!</p>
        <br></br>
</body>
</html>
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
