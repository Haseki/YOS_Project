<?php
include 'data_handler_admin.php';

$pass = $pass2 = "";


if(isset($_POST['post-password'])){
    $pass = $_POST['post-password'];
} else {
    header("location:settings.php?error=1");
}

if(isset($_POST['post-id'])){
    $id = $_POST['post-id'];
} else {
    header("location:settings.php?error=5");
}

if(isset($_POST['post-password-again'])){
    $pass2 = $_POST['post-password-again'];
} else {
    header("location:settings.php?error=2");
}

if($pass == "" || $pass2 == "") {
    header("location:settings.php?error=3");
} else {
    if($pass != $pass2) {
        header("location:settings.php?error=4");
    }
}


$pass = md5($pass);
$result = updatePass($id, $pass); 

if($result) {
    header("location:settings.php?error=0");
} else {
    header("location:settings.php?error=6");
}

