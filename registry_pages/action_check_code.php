<?php

include './data_handler.php';

if (isset($_POST['postPass'])) {

    $givenPass = $_POST['postPass'];
}


if (isset($_POST['srcKey'])) {

    $srcKey = $_POST['srcKey'];
}

if (isset($_POST['postCode'])) {

    $givenCode = $_POST['postCode'];
}

if (isset($_POST['postUrl'])) {

    $url = $_POST['postUrl'];
}

$result = getRegistry($givenPass);

if($result) {   
$passport = $result['passport'];
$ip = $result['ip'];
$time = $result['entry_date'];
$code = $result['entry_code'];
} else {
    if($srcKey == "Update"){
    header("location:./check_error.php?url=check_code_upd.php");
    } else if($srcKey == "View") {
    header("location:./check_error.php?url=check_code_view.php");
    } else
    {
    header("location:./check_error.php?url=index.php");
    }
}




if($givenCode == $code && $srcKey == "Update" && $givenPass == $passport){
    header("location:./update_page.php?passport=$passport");
} else if ($givenCode == $code && $srcKey == "View" && $givenPass == $passport){
    header("location:./view_page.php?passport=$passport");
} else {
  if($srcKey == "Update"){
    header("location:./check_error.php?url=check_code_upd.php");
    } else if($srcKey == "View") {
    header("location:./check_error.php?url=check_code_view.php");
    } else
    {
    header("location:./check_error.php?url=index.php");
    }
}


?>