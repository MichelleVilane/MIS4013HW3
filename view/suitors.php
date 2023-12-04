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
  <div style="width: 100%; text-align: center;">
    <span style="display: inline-block; margin: 0 auto; border: 5px solid black; padding: 10px;">
         <br></br>
    <p>Hello, Michelle! Welcome back to your Cupid's Bow user portal. Here is a list of your potential dates and their preferred location to meet. 
    to see more information about your suitor's meeting preferences, click the 'additional information' hyperlink. To make or cancel a date, please click on the 'Date' section of the navigation bar at the top of the screen. Goodluck!</p>
        <br></br>
    </span>
  </div>
  
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
