 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newClassModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newDescriptionModal" tabindex="-1" aria-labelledby="newDescriptionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
        <h1 class="modal-title fs-5" id="newClassModalLabel">New Description</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="">
          <div class="mb-3">
            <label for="tid" class="form-label">Trainer</label>
            <?php
$trainerList= selectInstructorForInput();
include "view-trainer-input-list.php";
?>
          </div>
         <div class="mb-3">
            <label for="cDescription" class="form-label">Class Description</label>
            <input type="text" class="form-control" id="cDescription" name="cDescription">
          </div>
       
        <div class="mb-3">
            <label for="daytime" class="form-label">Daytime</label>
            <input type="text" class="form-control" id="daytime" name="daytime">
          </div>
        <div class="mb-3">
            <label for="cNumber" class="form-label">Class Number</label>
            <input type="text" class="form-control" id="cNumber" name="cNumber">
          </div>
        <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
      </form>
      </div>
    </div>
  </div>
</div>
