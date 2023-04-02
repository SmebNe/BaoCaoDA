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
<form class="bg bg-info" method="post" action="?route=edit-anh" enctype="multipart/form-data">
  <div class="col-3 mb-3">
    <label for="anh" class="form-label">Chọn Ảnh:</label>
    <input type="file" class="form-control" id="anh" name="anh">
  </div>

  <button type="submit" class="btn btn-primary">Lưu Avatar</button>
</form>

