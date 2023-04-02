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
        header('Location: ?route=admin');
      }
    }
    function delete(){
      $userId = $_GET['id'];
      $this->model->delete($userId);
      header('Location: ?route=admin');
     }
     function timkiem(){
      require_once ('views/timkiem.php');
     }

    // function edit(){
    //   $studentNo = $_GET['studentno'];
    //   if(isset($studentNo)){
    //     $student = $this->model->find($studentNo);
    //   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $this->model->updateStudent($_POST['fullname'], $_POST['studentid'], $_POST['subjects']);
    //   header('Location: ?route=admin');
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
      $TenSP = $_POST['id'];
      $MoTa = $_POST['id'];
      // $Gia = $_POST['Gia'];
      // $Anh = $_POST['Anh'];
      // var_dump()
      $isSuccess = $this->model->updateSP($TenSP,$MoTa,$id);
      echo json_encode(['success' => $isSuccess]);
    }


    function getListSP() {   
        // $_SESSION['Anh'] = $sp['Anh'];     
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

      function detail() {
        $id = $_GET['id'];
        $sp = $this->model->getSPp($id);
        require_once 'views/detail.php';
      }


      function editAnh(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            session_start();
            $isUploaded = $this->uploadAnh();
            if($isUploaded){
                $avatar = htmlspecialchars( basename( $_FILES["anh"]["name"]));
                $userId = $_SESSION['id'];

                $isSuccess = $this->model->updateAnh($userId,$avatar);
                if($isSuccess){
                    $_SESSION['Anh'] = $avatar;
                    header("Location: ?");//chuyển về trang chủ
                    exit;
                }
                else{
                    $_SESSION['ErrorEditAvatar'] = "Server's Error!";
                    header("Location: ?route=edit-anh"); 
                    exit;
                }
            }else{
                header("Location: ?route=edit-anh");
                exit;
            }
        }

        require_once ('views/edit-anh.php');

    }
    function uploadAnh(){
        $target_dir = "views/imagesSP/";
$target_file = $target_dir . basename($_FILES["anh"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["anh"]["tmp_name"]);
  if($check !== false) {
    $_SESSION['ErrorEditAvatar'] = "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $_SESSION['ErrorEditAvatar'] = "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    $_SESSION['ErrorEditAvatar'] .= "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["anh"]["size"] > 500000) {
    $_SESSION['ErrorEditAvatar'] .= "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $_SESSION['ErrorEditAvatar'] .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $_SESSION['ErrorEditAvatar'] .= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.";
    return true;
  } else {
    $_SESSION['ErrorEditAvatar'] .= "Sorry, there was an error uploading your file.";
    return false;
  }
}
    }
      
} 
?>