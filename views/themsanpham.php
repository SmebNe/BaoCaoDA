<?php
include_once('views/shares/header.php');
?>
<body>
  <style>
      body {
        background-color: #fce6e6; /* màu hồng nhạt */
      }
      form {
        background-color: #EDF1FF; /* màu nền trắng */
        border-radius: 10px;
        padding: 20px;
        width: 1100px;
        margin: 0 auto;
      }
      input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
      }
      input[type="submit"] {
        background-color: #e60073; /* màu hồng đậm */
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 30px;
        
      }
      input[type="submit"]:hover {
        background-color: #d1006b; /* màu hồng đậm khi hover */
      }
      .button-container {
    text-align: center; /* căn giữa nút */
    margin-top: 20px; /* tạo khoảng cách với phần tử trên */
  }
    </style>

<div class="container-fluid pt-5"> 
<form method="post" action="?route=add">
  <div class="mb-3">
    <label for="TenSP" class="form-label">Tên Sản Phẩm</label>
    <input type="text" class="form-control" id="TenSP" name="TenSP">
  </div>
  <div class="mb-3">
    <label for="MoTa" class="form-label">Mô Tả</label>
    <input type="text" class="form-control" id="MoTa" name="MoTa">
  </div>
  <div class="mb-3">
    <label for="Gia" class="form-label">Giá</label>
    <input type="text" class="form-control" id="Gia" name="Gia">
  </div>
  <div class="mb-3">
    <label for="Anh" class="form-label"> Ảnh </label>
    <input type="text" class="form-control" id="Anh" name="Anh">
    <input type="file" class="form-control" id="avatar" name="avatar">
  </div>


  <div class="button-container"> 
  <button type="submit" class="btn btn-primary">Thêm</button>
</div>
  
</div>
</body>
   
<?php
include_once('views/shares/footer.php');
?>