<h1>Suitor Preferences</h1>
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

      </tbody>
  </table>
</div>
