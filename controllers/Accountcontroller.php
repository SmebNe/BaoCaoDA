<?php 
// var_dump: dừng và in biến ra , die: dừng và in echo
require_once 'models/userModel.php';
class Accountcontroller {
    private $model;
    
    function __construct() {
      global $db, $username, $password;
      $this->model = new userModel($db, $username, $password);
    }

    function logout(){
        session_start();
        unset($_SESSION['UserId']);
        unset($_SESSION['Name']);
        //  unset($_SESSION['Error']);
        unset($_SESSION['Avatar']); // trả về avatar mặc định
        header("Location: ?route=login");
    }

    function login(){
        
        if($_SERVER['REQUEST_METHOD']=="POST"){
        session_start();

            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $user =  $this->model->find($email);
            if (!empty($user)){
                $isLogin = password_verify($pass,$user['Pass']);
                if($isLogin){
                    $_SESSION['UserId'] = $user['id'];
                    $_SESSION['Name'] = $user['Fullname'];
                    $_SESSION['Avatar'] = $user['Avatar'];
                    header('Location: ?');
                }else{
                    $_SESSION['Error'] = "Sai mật khẩu";
                    header("Location: ?route=login");
                    exit;
                }
            }else{
                $_SESSION['Error'] = "Tài khoản không tồn tại!";
                header("Location: ?route=login");
                exit;
            }
        }

        require_once ('views/login.php');
    }
    function register(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $hashPass = password_hash($_POST['pass'],PASSWORD_BCRYPT);
            $this->model->add($_POST['name'], $_POST['email'], $hashPass);
            header('Location: ?route=login');

            exit;
        }




        require_once ('views/register.php');
    }

    function editAvatar(){

        if($_SERVER['REQUEST_METHOD']=="POST"){
            session_start();
            $isUploaded = $this->uploadAvatar();
            if($isUploaded){
                $avatar = htmlspecialchars( basename( $_FILES["avatar"]["name"]));
                $userId = $_SESSION['UserId'];

                $isSuccess = $this->model->updateAvatar($userId,$avatar);
                if($isSuccess){
                    $_SESSION['Avatar'] = $avatar;
                    header("Location: ?");//chuyển về trang chủ
                    exit;
                }
                else{
                    $_SESSION['ErrorEditAvatar'] = "Server's Error!";
                    header("Location: ?route=edit-avatar"); 
                    exit;
                }
            }else{
                header("Location: ?route=edit-avatar");
                exit;
            }
        }

        require_once ('views/edit-avatar.php');

    }
    function uploadAvatar(){
        $target_dir = "views/images/";
$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["avatar"]["tmp_name"]);
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
if ($_FILES["avatar"]["size"] > 500000) {
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
  if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
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