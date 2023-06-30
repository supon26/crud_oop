<?php

class Users{
    
    private $conn;

    //Db Connection : 
    public function __construct(){
        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","test5");

        $this->conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
    }
    
    // ADD USERS :
    public function add_user($info){
        $name       = $info['name'];
        $email      = $info['email'];
        $password   = $info['password'];
        $query = "INSERT INTO `users`(`id`,`name`,`email`,`password`) VALUES(NULL,'$name','$email','$password')";
        $result = mysqli_query($this->conn,$query);   
    }

    // SHOW USERS
    public function show_users(){
        $result = mysqli_query($this->conn,"SELECT * FROM `users`");
        return $result;
    }
    // DELETE USERS
    public function delete_user($u_id){
        $result  = mysqli_query($this->conn,"DELETE FROM `users` WHERE id = '$u_id'");
        if($result){
            header("location:index.php");
        }
    }
    // EDIT USER
    public function edit_user($u_id){
        $result = mysqli_query($this->conn,"SELECT * FROM `users` WHERE id='$u_id'");
        return $result;
    }

    // UPDATE USER
    public function update_user($data,$u_id){
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];

        $result = mysqli_query($this->conn,"UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE id='$u_id'");
        if($result){
            header("location:index.php");
        }
    }
}

?>