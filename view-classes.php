<h1>Classes</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
       <th>Name</th>
       <th>Description</th>
      </tr>
      
    </thead>
      <tbody>
        <?php
while ($class=$classes -> fetch_assoc()) {
?>
  <tr>
    <td><?php echo $class['class_id'];?></td>
    <td><?php echo $class['class_name'];?></td>
    <td><?php echo $class['class_description'];?></td>
  </tr>
  <?php
  
}
       ?>
      </tbody>
  </table>
</div>
