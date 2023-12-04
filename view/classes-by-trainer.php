<h1>Suitor Preferences</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
       <th>Event/ Activities</th>
       <th>Description</th>
        <th>Day</th>
       
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
     <td><?php echo $class['day']; ?></td>
  </tr>
  <?php
}
       ?>

      </tbody>
  </table>
</div>
