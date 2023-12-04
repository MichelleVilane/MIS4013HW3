<select class="form-select" id="cNumber" name="cNumber>
<?php
while ($classItem =$classList -> fetch assoc()) {
  ?>
  <option value="<?php echo $classItem['class_id']">Three</option>
<?php
}
?>  
</select>
