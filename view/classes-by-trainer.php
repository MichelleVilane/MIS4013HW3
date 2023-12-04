<h1>Classes by Trainer</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
       <th>Number</th>
       <th>Description</th>
        <th>Daytime</th>
       
      </tr>
      
    </thead>
      <tbody>
        <?php
while ($class= $classes -> fetch_assoc()) {
?>
  <tr>
    <td><?php echo $class['class_id']; ?></td>
    <td><?php echo $class['class_number']; ?></td>
    <td><?php echo $class['class_description']; ?></td>
     <td><?php echo $class['daytime']; ?></td>
  </tr>
  <?php
}
       ?>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="Matt Damon3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="Matt damon1.jfif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Matt damon2.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </tbody>
  </table>
</div>
