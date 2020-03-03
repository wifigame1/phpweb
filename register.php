<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register (สมัครสมาชิก)</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-12 order-md-1 p-4">
        <h4 class="mb-3">สมัครสมาชิก</h4>
        <form action="connection/insert_member.php" method="post" class="needs-validation" required>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">ชื่อ</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">นามสกุล</label>
                    <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value=""
                        required>
                    <div class="invalid-feedback">
                        Valid lastname is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">ชื่อผู้ใช้</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="form-control" id="usrename" name="username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">อีเมล<span class="text-muted"></span></label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="mb-3">
                <label for="address1">ที่อยู่ 1</label>
                <input type="text" class="form-control" id="address1" name="address1" required>
                <div class="invalid-feedback">
                    Please enter your shipping address1.
                </div>
            </div>

            <div class="mb-3">
                <label for="address2">ที่อยู่ 2 <span class="text-muted"></span></label>
                <input type="text" class="form-control" id="address2" name="address2" required>
            </div>
            <div class="invalid-feedback">
                Please enter your shipping address2.
            </div>

            <button class="btn btn-success btn-lg btn-block" type="submit">สมัครสมาชิก</button>
        </form>

        <?php
        require_once("connection/connect.php");
        $sql = "select * from member";
        $result = $connect->query($sql);
        
        echo $result->num_rows;
      ?>


        <table class="table  mt-2">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อ-นามสกุล</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">ที่อยู่</th>
                    <th scope="col">จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?php if($result->num_rows > 0) { ?>
                <?php while($data = $result ->fetch_assoc()) { ?>
                <tr>
                    <th scope="row"><?=$data["id"]?></th>
                    <td><?=$data["name"]?> <?=$data["lastname"]?></td>
                    <td><?=$data["username"]?></td>
                    <td><?=$data["email"]?></td>
                    <td><?=$data["address1"]?><?=$data["address2"]?></td>
                    <td>
                        <a href="connection/delete_data.php?id=<?=$data["id"]?>"
                            class="btn btn-danger btn-sm">Delete</a>
                        <a href="update_register.php?id=<?=$data["id"]?>" 
                            class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <?php } ?>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>