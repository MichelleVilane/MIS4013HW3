<select class="form-select" id="tid" name="tid">
  <?php
while($TrainerItem=$trainerList ->fetch-assoc()) {
  ?>
  <option value="<?php echo $trainerItem['trainer_id'];?>"><?php echo $trainerItem['trainer_name'];?></option>
  <?php
}
?>
</select>
