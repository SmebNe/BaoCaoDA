<?php 

class SPModel {
    private $db;
    
    // __construct()
    function __construct($dsn, $username, $password) {
      $this->db = new PDO($dsn, $username, $password);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    function add($TenSP, $MoTa, $Gia, $Anh) {
      $stmt = $this->db->prepare("INSERT INTO sp (TenSP, MoTa, Gia, Anh) VALUES (:TenSP, :MoTa, :Gia, :Anh)");
      $stmt->execute(array(
        ':TenSP' => $TenSP,
        ':MoTa' => $MoTa,
        ':Gia' => $Gia,
        ':Anh' => $Anh
      ));
    }
    // function updateStudent($fullname, $studentid, $subjectsid, $studentNo) {
    //    $sql = "UPDATE students SET fullname=:fullname, studentid=:studentid, 
    //   subjectid=:subjectid where studentNo=:st";
    //   $stmt->execute(array(
    //     ':fullname' => $fullname,
    //     ':studentid' => $studentid,
    //     ':subjectid' => $subjectsid,
    //     ':st' => $studentNo
    //   ));
    // }

    function delete($id){
      $stmt = $this->db->prepare("delete from sp where id =:ID");
      $stmt->bindParam(':ID', $id);
      $stmt->execute();
    }
    function updateSP($id,$TenSP, $MoTa, $Gia, $Anh) {
      $sql = "UPDATE sp set TenSP =: TenSP, MoTa =: MoTa, Gia =: Gia, Anh =: Anh where id =: st";
      $stmt = $this->db->prepare($sql);
      return $stmt->execute(array(
        ':st' => $id,
        ':TenSP' => $TenSP,
        ':MoTa' => $MoTa,
        ':Gia' => $Gia,
        ':Anh' => $Anh,
          
      ));
    }
    function find($studentNo){
      $stmt = $this->db->prepare("select * from students where studentNo =:studentno");
      $stmt->bindParam(':studentno', $studentNo);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // function getStudent() {
    //   $stmt = $this->db->prepare("select * from sp");
    //   $stmt->execute();
    //   $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //   return $students;
    // }

    function getSP() {
      $stmt = $this->db->prepare("select * from sp");
      $stmt->execute();
      $sp = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $sp;
    }
  }
?>