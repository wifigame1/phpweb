<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'webfree';
$connect = new mysqli($host,$username,$password,$dbname);

if($connect->connect_error){
    die("การเชื่อมต่อผิดพลาด : ". $connect->connect_error);
}
echo "เชื่อมต่อสำเร็จ";   

?>