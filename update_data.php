<?php
    require("connect.php");

    $id = $_POST["id"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    
    $sql = "update member set 
                name = '$name',
                lastname = '$lastname',
                username = '$username',
                email = '$email',
                address1 = '$address1',
                address2 = '$address2'
            where id = $id";



            if($connect->query($sql) === TRUE){
                echo "บันทึกข้อมูลเรียบร้อยแล้ว !!";
                header("Location: ../register.php");
            } else {
                echo "Error : ".$connect->error;
            }
            $connect->close();

?>