<h1>Sessions by Class</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Session ID</th>
       <th>Trainer ID</th>
       <th>Class Description</th>
        <th>Daytime</th>
       
      </tr>
      
    </thead>
      <tbody>
        <?php
    while ($session=$sessions -> fetch_assoc()) {
?>
  <tr>
      <td><?php echo $session['session_id'];?></td>
      <td><?php echo $session['trainer_id'];?></td>
      <td><?php echo $session['class_description'];?></td>
      <td><?php echo $session['daytime'] ;?></td>
  </tr>
  <?php
  
}
       ?>
      </tbody>
  </table>
</div>