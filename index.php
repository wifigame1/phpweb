<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
    
        <?php
            
            require_once('connect.php');

            $sql = "insert into member 
                        (name ,lastname, username, email,address1 ,address2)
                    values
                        ('Phuminan','Wimano','famz','123456@gmail.com','koipo','hjiihi')
            
            ";

            if($connect->query($sql) === TRUE){
                echo "เพิ่มข้อมูลเรียบร้อย";
            }else{
                echo "เกิดข้อผิดพลาด : ". $connect->error;
            }

        ?>

    </div>

</body>
</html>