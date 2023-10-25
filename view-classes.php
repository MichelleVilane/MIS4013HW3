<h1>Classes</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
       <th>Number</th>
       <th>Description</th>
        <th>Session</th>
      </tr>
      
    </thead>
      <tbody>
        <?php
while ($class=$classes -> fetch_assoc()) {
?>
  <tr>
    <td><?php echo $class['class_id'];?></td>
    <td><?php echo $class['class_number'];?></td>
    <td><?php echo $class['class_description'];?></td>
   
    <td>
      <form method="post" action="session-by-class.php">
        <input type="hidden" name="cid" value="<?php echo $class['class_id'];?>">
        <button type="submit" class="btn btn-primary">Session</button>
          </form>
    </td>
  </tr>
  <?php
  
}
       ?>
      </tbody>
  </table>
</div>
