<?php
include_once('views/shares/header.php');
?>
<?php
//in loi ra
if(isset($_SESSION['ErrorEditAvatar'])){
  echo "<p class='text-danger'>".$_SESSION['ErrorEditAvatar']."</p>";
  unset($_SESSION['ErrorEditAvatar']);
}
?>
<form class="bg bg-info" method="post" action="?route=edit-avatar" enctype="multipart/form-data">
  <div class="col-3 mb-3">
    <label for="avatar" class="form-label">Chọn Avatar:</label>
    <input type="file" class="form-control" id="avatar" name="avatar">
  </div>

  <button type="submit" class="btn btn-primary">Lưu Avatar</button>
</form>

