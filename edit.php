<?php

include("classes/Users.php");
$u1 = new Users;

$id = $_GET['id'];

if(isset($_GET['id'])){
    $data = $u1->edit_user($id);
    $row = mysqli_fetch_assoc($data);
    // print_r($row);
}

if(isset($_POST['update_user'])){
    $u1->update_user($_POST,$id);
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
        <div class="row vh-100 align-items-center">
            <div class="col-lg-4 offset-lg-4">
                <!-- form start -->
                <form action="#" method="POST" class="shadow p-4">
                    <h3 class="display-5 text-center text-danger mb-3">Update Info.</h3>
                    <div class="form-group mb-3">
                        <input type="text" name="name" class="form-control shadow-none" placeholder="Enter your name"
                            value="<?php echo $row['name'];?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="email" class="form-control shadow-none" placeholder="Enter your Email"
                            value="<?php echo $row['email'];?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" name="password" class="form-control shadow-none"
                            placeholder="Enter your Password" value="<?php echo $row['password'];?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <input class="btn btn-success w-100" type="submit" name="update_user" value="Update User">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>