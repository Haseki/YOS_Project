<html>
    <head>
        <meta charset="UTF-8">
    <link rel='stylesheet' type = 'text/css' href='default.css'> 
        <title></title>
    </head></html>

<?php
require 'data_handler.php';


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
    }

    if ($type == "FOTO") {
        try {

            // Undefined | Multiple Files | $_FILES Corruption Attack
            // If this request falls under any of them, treat it invalid.
            if (
                    !isset($_FILES['postPicture']['error']) ||
                    is_array($_FILES['postPicture']['error'])
            ) {
                throw new RuntimeException('Invalid parameters.');
            }

            // Check $_FILES['postPicture']['error'] value.
            switch ($_FILES['postPicture']['error']) {
                case UPLOAD_ERR_OK:
                    break;
                case UPLOAD_ERR_NO_FILE:
                    throw new RuntimeException('No file sent.');
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    throw new RuntimeException('Exceeded filesize limit.');
                default:
                    throw new RuntimeException('Unknown errors.');
            }
            // You should also check filesize here. 
            if ($_FILES['postPicture']['size'] > 1000000) {
                throw new RuntimeException('Exceeded filesize limit.');
            }
            // You should name it uniquely.
            // DO NOT USE $_FILES['postPicture']['name'] WITHOUT ANY VALIDATION !!
            // On this example, obtain safe unique name from its binary data.
   
            $img_type = substr($_FILES['postPicture']['type'], 6,20);
            
            $date = time();
            $fname = "IMG_".$date.".".$img_type;
            $ftmp_name = $_FILES['postPicture']['tmp_name'];
            if (!move_uploaded_file(
                            $_FILES['postPicture']['tmp_name'], "uploads/" . $fname)
            ) {
                throw new RuntimeException('Failed to move uploaded file.');
            }

            $file_dir = "../registry_pages/uploads/" . $fname;
            return $file_dir;
            
        } catch (RuntimeException $e) {
            echo $e->getMessage();
            echo '<br>';
            return "E-003";
        }
    }
}

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

function numberToLetter($num){
    switch ($num){
        case 1:
            return 'A';
        case 2:
            return 'B';
        case 3:
            return 'C';
        case 4:
            return 'D';
        case 5:
            return 'E';
        case 6:
            return 'F';
        case 7:
            return 'G';
        case 8:
            return 'H';
        case 9:
            return 'I';
        case 10:
            return 'J';
        case 11:
            return 'K';
        case 12:
            return 'L';
        case 13:
            return 'M';
        case 14:
            return 'N';
        case 15:
            return 'O';
        case 16:
            return 'P';
        case 17:
            return 'R';
        case 18:
            return 'S';
        case 19:
            return 'T';
        case 20:
            return 'U';
        case 21:
            return 'W';
        case 22:
            return 'X';
        case 23:
            return 'Q';
        case 24:
            return 'V';
        case 25:
            return 'Y';
        case 26:
            return 'Z';
        default:
            return '';
    }
   
}

function cripto(){
   $letNum1 = rand(1, 26);
   $letNum2 = rand(1, 26);
   $letNum3 = rand(1, 26);
   $number1 = rand(10, 99);
   $number2 = rand(10, 99);
   $number3 = rand(10, 99);
   
   $letter1 = numberToLetter($letNum1);
   $letter2 = numberToLetter($letNum2);
   $letter3 = numberToLetter($letNum3);
   
   $code = $letter1."".$letter2."".$number1."".$letter2."".$letter3."".$number2."".$letter3."".$letter1."".$number3;
   
   return $code;
}

date_default_timezone_set('Europe/Istanbul');
$receipt_date = $passport = $tc_no = $name = $surname = $m_name = $f_name = $birth_plc = $birth_date = "";
$gradu_date = $hs_name = $hs_country = $dip_grade = $grade_system = $period = $gender = "";
$country = $city = $adres = $nation = "";
$tel = $mail = $photo_dir = "";

$receipt_date = $_POST['postReceiptDate'];
$passport = $_POST['postPassport'];
$tc_no = $_POST['postKimlik'];
$name = $_POST['postName'];
$surname = $_POST['postSurname'];
$m_name = $_POST['postMother'];
$f_name = $_POST['postFather'];
$birth_plc = $_POST['postBirthPlace'];
$birth_date = $_POST['postBirthDate'];
$gradu_date = $_POST['postGraduDate'];
$hs_name = $_POST['postHighSchName'];
$hs_country = $_POST['postHighSchCity'];
$dip_grade = $_POST['postDegree'];
$grade_system = $_POST['postGradeSystem'];
$period = $_POST['postPeriod'];
$gender = $_POST['postGender'];
$country = $_POST['postCountry'];
$city = $_POST['postCity'];
$adres = $_POST['postAdress'];
$nation = $_POST['postNationality'];
$tel = $_POST['postPhone'];
$mail = $_POST['postMail'];
$ip = $_POST['IPAdres'];
$time = date("d/m/Y - G:i:s", time());
$code = cripto();

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
    
    if(!checkRegistry($passport)){
    insertRegistry($receipt_date, $passport, $tc_no, $name, $surname, $gender, $m_name, $f_name, $birth_plc, $birth_date, $nation, $photo_dir, $gradu_date, $hs_name, $hs_country, $dip_grade, $grade_system, $period, $country, $city, $adres, $tel, $mail, $time ,$ip,$code);
//    echo 'Kaydınız başarılı bir şekilde gönderilmiştir. (Your Registry Has been send)<br>';
    header("location:./action_ok.php?passport=$passport");
    } else {
        $result = checkRegistry($passport);
        $old_date = $result['date'];
        $old_ip = $result['ip'];
        header("location:./action_already.php?passport=$passport");
//        echo 'Bu pasaport no ile daha önce giriş yaptınız -> Tarih: '.$old_date.' IP No: '.$old_ip.'<br>';
//        echo 'You have registered with this passport number before -> DATE: '.$old_date.' IP No: '.$old_ip.'<br>';
    }
    
} else {
//    echo'Tam olarak ' . $error . 'adet hata ile karşılaşıldı.<br>';
    header("location:./action_error.php?error=$error");
}
                ?>
    
    
<script>
    
    </script>
    
