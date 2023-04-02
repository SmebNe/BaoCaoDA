`<?php 

class userModel {
    private $db; 
    
    // __construct()
    function __construct($dsn, $username, $password) {
      $this->db = new PDO($dsn, $username, $password);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    function add($name, $email, $pass) {
        $stmt = $this->db->prepare("INSERT INTO user (FullName, Email, Pass)
         VALUES (:fullname, :email, :pass)");
        $stmt->execute(array(
          ':fullname' => $name  ,
          ':email' => $email,
          ':pass' => $pass
        ));
      }
      function updateAvatar($userId, $avatar) {
        $sql = "UPDATE user SET Avatar =:a WHERE id  =:i";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(array(
          ':a' => $avatar,
          ':i' => $userId
        ));
      }
      function find($email){
        $stmt = $this->db->prepare("select * from user where Email =:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }
      function findAdmin($email){
        $stmt = $this->db->prepare("select * from admin where TenTK =:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }
      function getUser() {
        $stmt = $this->db->prepare("select * from user");
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $user;
      }
  }
?>