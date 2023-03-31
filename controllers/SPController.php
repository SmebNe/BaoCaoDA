<?php 
require_once 'models/spModel.php';
class SPController {
    private $model;
    
    function __construct() {
      global $db, $username, $password;
      $this->model = new SPModel($db, $username, $password);
    }

    function index(){
      $sp =  $this->model->getSP();
      require_once ('views/themsanpham.php');
    }
    
    function add() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $this->model->add($_POST['TenSP'], $_POST['MoTa'], $_POST['Gia'], $_POST['Anh']);
        $_SESSION['Anh'] = $sp['Anh'];
        header('Location: ?route=danh-sach');
      }
    }
    function delete(){
      $userId = $_GET['id'];
      $this->model->delete($userId);
      header('Location: ?route=danh-sach');
     }

    // function edit(){
    //   $studentNo = $_GET['studentno'];
    //   if(isset($studentNo)){
    //     $student = $this->model->find($studentNo);
    //   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $this->model->updateStudent($_POST['fullname'], $_POST['studentid'], $_POST['subjects']);
    //   header('Location: ?route=danh-sach');
    //   exit;

    //   }
    //   $subjects = $this->model->getSubject();

    //     require_once('views/edit.php');
    //   }else{
    //     echo "NOT FOUND!";
    //   }
    // }
    function editSP(){  
      $id = $_POST['id'];
      $TenSP = $_POST['TenSP'];
      $MoTa = $_POST['MoTa'];
      $Gia = $_POST['Gia'];
      $Anh = $_POST['Anh'];
      // var_dump()
      $isSuccess = $this->model->updateSP($id,$TenSP,$MoTa,$Gia,$Anh);
      echo json_encode(['success' => $isSuccess]);
    }


    function getListSP() {      
        $sp = $this->model->getSP();
        require_once ('views/danhsachsanpham.php');
      }
    
    function getHome() {      
        $sp = $this->model->getSP();
        require_once ('views/home.php');
      }


      function cT() {      
        require_once ('views/contact.php');
      }





      
 } 
?>