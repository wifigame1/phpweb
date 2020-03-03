<?php

    require("connect.php");

    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];


    $sql = "insert into member (name,lastname,username,email,address1,address2)
     values ('$name','$lastname','$username','$email','$address1','$address2')";

    if($connect->query($sql) === TRUE){
        echo "บันทึกข้อมูลเรียบร้อยแล้ว !!";
        header("Location: ../register.php");
    } else {
        echo "Error : ".$connect->error;
    }
    $connect->close();
?>