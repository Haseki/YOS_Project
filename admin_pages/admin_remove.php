<?php
include 'admin_header.php';



if(isset($_GET['id'])) {
    $id = $_GET['id'];
}


$result = deleteAdminByID($id);

header("location:admins.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

