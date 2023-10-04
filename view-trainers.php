<h1>Trainers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
       <th>Name</th>
       <th>Studio</th>
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
  </tr>
  <?php
  
}
       ?>
      </tbody>
  </table>
</div>
