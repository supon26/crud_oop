<?php

include("classes/Users.php");
$u1 = new Users;

if(isset($_POST['add_user'])){
    $u1->add_user($_POST);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="text-center bg-danger text-light py-4 display-2">CRUD Operation</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <!-- form start -->
                <form action="#" method="POST" class="shadow p-4">
                    <h3 class="display-4 text-center text-danger mb-3">User Info.</h3>
                    <div class="form-group mb-3">
                        <input type="text" name="name" class="form-control shadow-none" placeholder="Enter your name"
                            id="" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="email" class="form-control shadow-none" placeholder="Enter your Email"
                            id="" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" name="password" class="form-control shadow-none"
                            placeholder="Enter your Password" id="" required>
                    </div>
                    <div class="form-group mb-3">
                        <input class="btn btn-dark w-100" type="submit" name="add_user" value="Add User">
                    </div>
                </form>
            </div>
            <div class="col-lg-8">
                <!-- table start -->
                <table class="table table-striped text-center table-bordered">
                    <thead>
                        <tr>
                            <th>#SL.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    
                    $data = $u1->show_users();
                    $i = 1;
                    while($row = mysqli_fetch_assoc($data)){?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id'];?>"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>