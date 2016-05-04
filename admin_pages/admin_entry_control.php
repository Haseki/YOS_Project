<?php
session_start();


include 'data_handler_admin.php';

$name = $pass = "";


$error['name-valid'] = 0;
$error['pass-valid'] = 0;
$error['pass-match'] = 0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (!empty($_POST['post-username'])) {
        $name = $_POST['post-username'];
        $error['name-valid'] = 0;
    } else {
        $error['name-valid'] = 1;
    }

    if (!empty($_POST['post-password'])) {
        $pass = $_POST['post-password'];
        $error['pass-valid'] = 0;
    } else {
        $error['pass-valid'] = 1;
    }
}

$result = false;

if($error['name-valid'] == 0 && $error['pass-valid'] == 0){
$result = checkAdmin($name, md5($pass));
}

if ($result) {
    $error['pass-match'] = 0;
} else {
    $error['pass-match'] = 1;
}


$GE = 0;

foreach ($error as $element) {
    if ($element == 1) {
        $GE += 1;
    }
}

if($GE > 0) {
    if($error['name-valid'] == 1){
        echo 'Name is invalid<br>';
    }
    if($error['pass-valid'] == 1){
        echo 'Password is invalid<br>';
    }
    if($error['pass-match'] == 1){
        echo 'Wrong Username/password combination<br>';
    }
    
}else if($GE == 0) {
    
    $_SESSION['user'] = $name;
    $_SESSION['pass'] = md5($pass);
    $_SESSION['entry'] = time();
    $entry = $_SESSION['entry'];
    entryUpdate($name, $entry);

    header("location:admin_main.php");

}