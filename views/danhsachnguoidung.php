<?php
error_reporting(0);
include_once('views/shares/header1.php');
?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Tên</th>
      <th scope="col">Ảnh Đại Diện</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    error_reporting(0);

    // $formatted_num = number_format($sp['Gia'], 3, '.', '');
    foreach ($user as $st) { ?>
      
      <tr id="<?php echo $st['id'] ?>">
        <td> <?php echo $st['id'] ?></td>
        <td> <?php echo $st['Email'] ?></td>
        <td> <?php echo $st['Fullname'] ?></td>
        <?php
        error_reporting(0);
           $ANH = $st['Avatar'];
          echo "<td><a href=''> <img width='100px' src='views/images/".$ANH."' /> </a> </td>";
             ?>  
      </tr>
    <?php } ?>
  </tbody>
</table>



<?php
error_reporting(0);
include_once('views/shares/footer.php');
?>