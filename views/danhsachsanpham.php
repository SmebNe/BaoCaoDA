<?php
error_reporting(0);
include_once('views/shares/header1.php');
?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">TÊN SẢN PHẨM</th>
      <th scope="col">MÔ TẢ</th>
      <th scope="col">GIÁ</th>
      <th scope="col">HÌNH ẢNH</th>
      <th scope="col">XÓA</th>
      <th scope="col">SỬA</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    error_reporting(0);

    // $formatted_num = number_format($sp['Gia'], 3, '.', '');
    foreach ($sp as $st) { ?>
      
      <tr id="<?php echo $st['id'] ?>">
        <td> <?php echo $st['id'] ?></td>
        <td> <?php echo $st['TenSP'] ?></td>
        <td> <?php echo $st['MoTa'] ?></td>
        <td> <?php echo number_format($st['Gia'], 3, '.', '')."VND"?></td>
        <?php
        error_reporting(0);
           $ANH = $st['Anh'];
          echo "<td><a href=''> <img width='100px' src='views/imagesSP/".$ANH."' /> </a> </td>";
             ?>                                             
        <td>
          <button data-TenSP="<?php echo $st['TenSP'] ?>" data-MoTa="<?php echo $st['MoTa'] ?>" data-id="<?php echo $st['id'] ?>" type="button" id= "edit-btn" class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">SỬA</button>
        </td>
        <td>
          <a class="btn btn-danger btn-delete" href="?route=delete&id=<?php echo $st['id'] ?>"> XÓA </a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form id="edit-form">
          <div class="mb-3">
            <label for="TenSP" class="col-form-label">TÊN SẢN PHẨM:</label>
            <input type="text" class="form-control" id="TenSP" name="TenSP">
          </div> 
           <!-- <div class="mb-3">
            <label for="id" class="col-form-label">id:</label>
            <input type="text" class="form-control" id="id" name="id">
          </div> -->
          <div class="mb-3">
            <label for="MoTa"  class="col-form-label">MÔ TẢ:</label>
            <input type="text" class="form-control" id="MoTa" name= "MoTa">
            <input type="hidden" id="id" name = "id">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary btn-save">Cập nhật</button>
      </div>
    </div>
  </div>
</div>

<?php
error_reporting(0);
include_once('views/shares/footer.php');
?>