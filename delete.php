<?php

include("classes/Users.php");
$u1 = new Users;

$id = $_GET['id'];

if(isset($_GET['id'])){
    $u1->delete_user($id);
}

?>