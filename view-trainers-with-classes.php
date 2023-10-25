<h1>Trainers with Classes</h1>
<div class="card-group">
 <?php
while ($trainer=$trainers -> fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $trainer['trainer_name'];?></h5>
      <p class="card-text">
      <ul class="list-group">        
  <?php
        $classes = selectClassesByTrainer($trainer['trainer_id']);
        while ($class = $classes ->fetch_assoc()) {
      ?>
    <li class="list-group-item"><?php echo $class['class_id'];?> - <?php echo $class['daytime'];?> - <?php echo $class['class_number'];?></li>       
      <?php
        }
   ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Studio: <?php echo $trainer['studio_number'];?></small></p>
    </div>
  </div>
  <?php
}
?>
</div>
     
