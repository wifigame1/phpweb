<?php
   require("connect.php");
   $id = $_GET ["id"];
   $sql = "delete from member where id = $id";
   
   if($connect->query($sql) === TRUE){
      echo "ลบข้อมูล id =".$id."เรียบร้อย";
      header("location:../register.php");
     } else {
      echo "ไม่สามารถลบข้อมูลได้ การเชื่อมต่อผิดพลาด";
  }
       $connect->close();
?>