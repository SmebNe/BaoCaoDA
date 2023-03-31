<!DOCTYPE html>
<html>
<head>
<?php
include_once('views/shares/header.php');
?>
 <style>
      body {
        background-color: #fce6e6; /* màu hồng nhạt */
      }
      form {
        background-color: #EDF1FF; /* màu nền trắng */
        border-radius: 10px;
        padding: 20px;
        width: 400px;
        margin: 20 auto;
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
        font-size: 16px;
      }
      input[type="submit"]:hover {
        background-color: #d1006b; /* màu hồng đậm khi hover */
      }
    </style>
</head>
<body>
	<form method="post"   action="?route=register">
		<label for="name">Họ và tên:</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="pass">Mật khẩu:</label>
		<input type="password" id="pass" name="pass" required>

		<button type="submit">Đăng ký</button>
	</form>
  <?php
include_once('views/shares/footer.php');
?>
</body>
</html>
