<?php
include 'data_handler_admin.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_GET['btn'])) {
    $btn = $_GET['btn'];
}



if ($btn == "okey") {

    $result = updateStatus($id, "1");

    if (!$result) {
        echo 'YANLIŞ SQL KOD<br>';
    }else {
        header("location:show_reg.php?id=$id");
    }
    
    
} else if ($btn == "cancel") {
    $result = updateStatus($id, "2");

    if (!$result) {
        echo 'YANLIŞ SQL KOD<br>';
    } else {
        header("location:show_reg.php?id=$id");
    }
} else if ($btn == "freeze") {
    $result = updateStatus($id, "0");

    if (!$result) {
        echo 'YANLIŞ SQL KOD<br>';
    } else {
        header("location:show_reg.php?id=$id");
    }
} else {
    echo 'YANLIŞ BUTON<br>';
}