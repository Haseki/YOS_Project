<?php
include 'admin_header.php';



$error['id'] = 0;
$error['email'] = 0;
$error['username'] = 0;
$error['password'] = 0;
$error['password2'] = 0;
$error['pass-comp'] = 1;
$id = $email = $username = $password = $entry_time = $password_again = $autho_view = $autho_cons = $autho_change = $autho_create = "";


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (!empty($_POST['post-email'])) {

        if (!filter_var($_POST['post-email'], FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 2;
        } else {
            $email = $_POST['post-email'];
        }
    } else {
        $error['email'] = 1;
    }

    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        $error['id'] = 1;
    }


    if (!empty($_POST['post-username'])) {
        $username = $_POST['post-username'];
    } else {
        $error['username'] = 1;
    }

    if (!empty($_POST['post-password'])) {
        $password = $_POST['post-password'];
    } else {
        $error['password'] = 1;
    }

    if (!empty($_POST['post-password-again'])) {
        $password_again = $_POST['post-password-again'];
    } else {
        $error['password2'] = 1;
    }

    if ($password == $password_again) {
        if ($error['password'] == 0 && $error['password2'] == 0) {
            $error['pass-comp'] = 0;
        }
    }


    if (isset($_POST['post-autho-cons'])) {
        if ($_POST['post-autho-cons'] == "true") {
            $autho_cons = 1;
        } else {
            $autho_cons = 0;
        }
    } else {
        $autho_cons = 0;
    }

    if (isset($_POST['post-autho-change'])) {
        if ($_POST['post-autho-change'] == "true") {
            $autho_change = 1;
        } else {
            $autho_change = 0;
        }
    } else {
        $autho_change = 0;
    }

    if (isset($_POST['post-autho-create'])) {
        if ($_POST['post-autho-create'] == "true") {
            $autho_create = 1;
        } else {
            $autho_create = 0;
        }
    } else {
        $autho_create = 0;
    }


    $general_error = 0;

    foreach ($error as $element) {
        if ($element == 1) {
            $general_error += 1;
        }
    }


    if ($general_error == 0) {
        $password = md5($password);
        $entry_time = time();

        $result = updateAdmin($id, $username, $password, $email, $entry_time, $autho_create, $autho_cons, $autho_change);
        if ($result) {
            header("location:admin_creating_success.php?name=$username");
        } else {
            header("location:admin_creating_fail.php?error=1");
        }
    }



    echo "VALUES <br>"
    . "NAME : " . $username . " <br> PASS : " . $password . " <br> PASS2 : " . $password_again . " <br> MAIL : " . $email . "<br>"
    . "AUTHORIZATIONS <br>"
    . "VIEV : " . $autho_view . " <br> CONS : " . $autho_cons . " <br> CHANGE : " . $autho_change . " <br> CREATE : " . $autho_create . "<br>";



    echo "ERRORS <br>--> Username  : " . $error['username'] . "<br>"
    . "       --> Password  : " . $error['password'] . "<br>"
    . "       --> Password 2: " . $error['password2'] . "<br>"
    . "       --> E-mail    : " . $error['email'] . "<br>"
    . "       --> Pass-Comp : " . $error['pass-comp'] . "<br>";
}