<h1>Classes</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
       <th>Number</th>
       <th>Description</th>
      </tr>
      
    </thead>
      <tbody>
        <?php
while ($classes=$classes -> fetch_assoc()) {
?>
  <tr>
    <td><?php echo $classes['class_id'];?></td>
    <td><?php echo $classes['class_number'];?></td>
    <td><?php echo $classes['class_description'];?></td>
  </tr>
  <?php
  
}
       ?>
      </tbody>
  </table>
</div>
