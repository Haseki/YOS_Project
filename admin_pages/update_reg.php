<html>
    <head>
        <meta charset="UTF-8">
    <link rel='stylesheet' type = 'text/css' href='default.css'> 
        <title></title>
    </head></html>

<?php
require 'data_handler_admin.php';


$error = 0;

function format_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function test_input($data, $type) {

    if ($type == "TEXT") {

        if (!empty($data)) {
            return $data;
        } else {
            return "E-001";
        }
    }

    if ($type == "NULL") {
        return $data;
    }

    if ($type == "NUMBER-NULL") {
        if (empty($data)) {
            return $data;
        } else
        if (!is_numeric($data)) {
            return "E-002";
        } else {
            return $data;
        }
    }

    if ($type == "NUMBER-FULL") {
        if (!empty($data)) {
            if (!is_numeric($data)) {
                echo 'Not Numeric the data ->'.$data.'<br>';
                return "E-002";
            } else {
                return $data;
            }
        } else {
            return "E-001";
        }
    }

    if ($type == "MAIL") {
        if (!empty($data)) {
            if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
                echo 'Thats not an email : '.$data.'<br>';
                return "E-002";
            } else {
                return $data;
            }
        } else {
            return "E-001";
        }
} }

//    if ($type == "FOTO") {
//        try {
//
//            // Undefined | Multiple Files | $_FILES Corruption Attack
//            // If this request falls under any of them, treat it invalid.
//            if (
//                    !isset($_FILES['postPicture']['error']) ||
//                    is_array($_FILES['postPicture']['error'])
//            ) {
//                throw new RuntimeException('Invalid parameters.');
//            }
//
//            // Check $_FILES['postPicture']['error'] value.
//            switch ($_FILES['postPicture']['error']) {
//                case UPLOAD_ERR_OK:
//                    break;
//                case UPLOAD_ERR_NO_FILE:
//                    throw new RuntimeException('No file sent.');
//                case UPLOAD_ERR_INI_SIZE:
//                case UPLOAD_ERR_FORM_SIZE:
//                    throw new RuntimeException('Exceeded filesize limit.');
//                default:
//                    throw new RuntimeException('Unknown errors.');
//            }
//            // You should also check filesize here. 
//            if ($_FILES['postPicture']['size'] > 1000000) {
//                throw new RuntimeException('Exceeded filesize limit.');
//            }
//            // You should name it uniquely.
//            // DO NOT USE $_FILES['postPicture']['name'] WITHOUT ANY VALIDATION !!
//            // On this example, obtain safe unique name from its binary data.
//   
//            $img_type = substr($_FILES['postPicture']['type'], 6,20);
//            
//            $date = time();
//            $fname = "IMG_".$date.".".$img_type;
//            $ftmp_name = $_FILES['postPicture']['tmp_name'];
//            if (!move_uploaded_file(
//                            $_FILES['postPicture']['tmp_name'], "./uploads/" . $fname)
//            ) {
//                throw new RuntimeException('Failed to move uploaded file.');
//            }
//
//            $file_dir = "./uploads/" . $fname;
//            return $file_dir;
//            
//        } catch (RuntimeException $e) {
//            echo $e->getMessage();
//            echo '<br>';
//            return "E-003";
//        }
//    }
//}

function control($data) {

    if ($data == "E-001") {
        echo 'Boş veri girdiniz';
        return false;
    } else
    if ($data == "E-002") {
        echo 'Yanlış veri girdiniz : ' . $data . '<br>';
        return false;
    } else 
    if ($data == "E-003") {
        echo 'Dosya Problemi : ' . $data . '<br>';
        return false;
    } else {
        return true;
    }
}

function ready_input($data, $type) {
    $data = format_input($data);
    $data = test_input($data, $type);

    if (!control($data)) {
        $GLOBALS['error'] = $GLOBALS['error'] + 1;
    }

    return $data;
}


date_default_timezone_set('Europe/Istanbul');
$receipt_date = $passport = $tc_no = $name = $surname = $m_name = $f_name = $birth_plc = $birth_date = "";
$gradu_date = $hs_name = $hs_country = $dip_grade = $grade_system = $period = $gender = "";
$country = $city = $adres = $nation = "";
$tel = $mail = $photo_dir = "";

$id=$_POST['post-id'];

$receipt_date = $_POST['post-receipt'];
$passport = $_POST['post-passport'];
$tc_no = $_POST['post-tcno'];
$name = $_POST['post-name'];
$surname = $_POST['post-surname'];
$gender = $_POST['post-gender'];
$m_name = $_POST['post-mother'];
$f_name = $_POST['post-father'];
$birth_plc = $_POST['post-birth-place'];
$birth_date = $_POST['post-birth-date'];
$nation = $_POST['post-nation'];
$hs_name = $_POST['post-high-name'];
$hs_country = $_POST['post-high-city'];
$gradu_date = $_POST['post-gradu-date'];
$period = $_POST['post-period'];
$dip_grade = $_POST['post-grade'];
$grade_system = $_POST['post-grade-system'];
$country = $_POST['post-country'];
$city = $_POST['post-city'];
$adres = $_POST['post-adress'];
$tel = $_POST['post-phone'];
$mail = $_POST['post-mail'];
$status = 3;


$photo_dir = ready_input($photo_dir, "FOTO");
$receipt_date = ready_input($receipt_date, "TEXT");
$passport = ready_input($passport, "TEXT");
$tc_no = ready_input($tc_no, "NUMBER-NULL");
$name = ready_input($name, "TEXT");
$surname = ready_input($surname, "TEXT");
$m_name = ready_input($m_name, "TEXT");
$f_name = ready_input($f_name, "TEXT");
$birth_plc = ready_input($birth_plc, "TEXT");
$birth_date = ready_input($birth_date, "TEXT");
$gradu_date = ready_input($gradu_date, "NULL");
$hs_name = ready_input($hs_name, "TEXT");
$hs_country = ready_input($hs_country, "TEXT");
$dip_grade = ready_input($dip_grade, "NULL");
$grade_system = ready_input($grade_system, "NULL");
$period = ready_input($period, "NULL");
$gender = ready_input($gender, "TEXT");
$country = ready_input($country, "TEXT");
$city = ready_input($city, "TEXT");
$adres = ready_input($adres, "TEXT");
$nation = ready_input($nation, "TEXT");
$tel = ready_input($tel, "NUMBER-FULL");
$mail = ready_input($mail, "MAIL");

$error = $GLOBALS['error'];



if ($error == 0) {
    
    updateRegistryAdmin($id, $receipt_date, $passport, $tc_no, $name, $surname, $gender, $m_name, $f_name, $birth_plc, $birth_date, $nation, $gradu_date, $hs_name, $hs_country, $dip_grade, $grade_system, $period, $country, $city, $adres, $tel, $mail, $status);
//    echo 'Kaydınız başarılı bir şekilde gönderilmiştir. (Your Registry Has been send)<br>';
     header("location:change_registry.php?id=$id");

    
} else {
    echo'Tam olarak ' . $error . 'adet hata ile karşılaşıldı.<br>';
//    header("location:change_error.php?error=$error");
}
                ?>
    
    

