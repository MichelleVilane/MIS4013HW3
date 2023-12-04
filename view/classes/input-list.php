<select class="form-select" id="cNumber" name="cNumber>
<?php
while ($classItem =$classList -> fetch assoc()) {
  $selText="";
  if ($selectedClass==$ClassItem['class_number']) {
    $selText = " selected";
  }
  ?>
  <option value="<?php echo $classItem['class_id'];?>"><?php echo $classItem['class_number'];?></option>
<?php
}
?>  
</select>
