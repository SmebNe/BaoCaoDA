<?php
include_once('views/shares/header.php');
?>
<body> 
    <style>
          body {
        background-color: #fce6e6; /* màu hồng nhạt */
      }
    </style>
<?php
    error_reporting(0);
    //Các đoạn mã PHP của bạn ở đây
?>
<!-- <div class="timkiem">
    <form action="" method="GET">
    <table>
        <tr>
            <td><input type="text" name="tukhoa" placeholder="Nhập từ khóa"></td>
            <td><input type="submit" value="Tìm kiếm"></td>
        </tr>
    </table>
    <input type="hidden" name="action" value="tim-kiem">
    </form>
</div> -->
    <!-- Shop Start -->
    <div class="container-fluid pt-5 ">
        <div class="row px-xl-5">
                <?php 
                    for ( $i=$sp['id']; $i<count($sp); $i++) { 
                        ini_set('display_errors', 0);
                        foreach ($sp as $st) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <?php
                                            $ANH = $st['Anh'];
                                            echo "<a href=''> <img width='300px' src='views/imagesSP/".$ANH."' /> </a> ";
                                        ?>
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3"><?php echo $st['TenSP'] ?></h6>
                                        <div class="d-flex justify-content-center">
                                            <h6><?php echo number_format($st['Gia'], 3, '.', '')."VND" ?></h6><h6 class="text-muted ml-2"><del><?php echo number_format($st['Gia'], 3, '.', '')."VND" ?></del></h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        
                                        <a href="?route=detail&id=<?php echo $st['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi Tiết</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm Giỏ Hàng</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } break;
                    }  
                ?>
                    <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center mb-3">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
        </div>
    </div>
<?php
include_once('views/shares/footer.php');
?>
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


</body>

