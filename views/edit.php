<?php
include_once('views/shares/header.php');
?>
<form method="post" action="?route=edit&id=<?php echo $sp['id']?>">
  <div class="mb-3">
    <label for="TenSP" class="form-label">FULL NAME</label>
    <input value="<?php echo $sp['TenSP']?>" type="text" class="form-control" id="TenSP" name="TenSP">
  </div>
  <div class="mb-3">
    <label for="studentid" class="form-label">Student ID</label>
    <input value="<?php echo $student['studentid']?>" type="text" class="form-control" id="studentid" name="studentid">
  </div>
  <div class="mb-3">
    <label for="fullname" class="form-label">Subjects</label>
    <select sname="subjects" class="form-control">
      <option value="subject1">Subject 1</option>
      <option value="subject2">Subject 2</option>
      <option value="subject3">Subject 3</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">DANG KY</button>
</form>

<?php
include_once('views/shares/footer.php');
?>