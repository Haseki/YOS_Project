<?php

function databaseCon ($servername, $username, $password, $database)
{
// Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return false;
    }else
    {
        return $conn;
    }
}
        

//    $receipt_date = $passport = $tc_no = $name = $surname = $m_name = $f_name = $birth_plc = $birth_date = "";
//    $gradu_date = $hs_name= $hs_country = $dip_grade = $grade_system = $period = $gender = ""       ;
//    $country = $city = $adres = $nation =""       ;
//    $tel = $mail = ""       ;

function updateRegistry ($receipt_date , $passport ,$tc_no ,$name ,$surname, $gender, $m_name ,$f_name ,$birth_plc
        , $birth_date, $nation ,$photo_dir, $gradu_date, $hs_name, $hs_country, $dip_grade , $grade_system ,$period ,$country
        , $city , $adres ,  $tel , $mail, $time, $ip, $code,$status){
        $servername = "localhost";
        $username = "Haseki";
        $password = "puceg1993";
        $dbName   = "yosveri";
    
        
        
        $conn = databaseCon($servername, $username, $password, $dbName);
    
        $conn->query("SET NAMES utf8");
        $conn->query("SET CHARACTER SET utf8");
        $conn->query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
        
        $sql = "UPDATE registry SET "
                . "receipt='$receipt_date',"
                . "passport='$passport',"
                . "tcno='$tc_no',"
                . "name='$name',"
                . "surname='$surname',"
                . "gender='$gender',"
                . "mot_name='$m_name',"
                . "fat_name='$f_name',"
                . "birth_plc='$birth_plc',"
                . "birth_date='$birth_date',"
                . "nation='$nation',"
                . "photo_dir='$photo_dir',"
                . "grad_year='$gradu_date',"
                . "high_name='$hs_name',"
                . "high_city='$hs_country',"
                . "grade='$dip_grade',"
                . "grade_sys='$grade_system',"
                . "period='$period',"
                . "country='$country',"
                . "city='$city',"
                . "adress='$adres',"
                . "phone='$tel',"
                . "mail='$mail',"
                . "entry_date='$time',"
                . "ip='$ip',"
                . "entry_code='$code' "
                . "status = $status"
                . "WHERE passport = '$passport'";
        
        
        echo $sql."<br>";
        
        if (mysqli_query($conn, $sql)) {
            echo 'Data inserted<br>';
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT inserted<br>';
            mysqli_close($conn);
            return false;
        }
}


    
function insertRegistry ($receipt_date , $passport ,$tc_no ,$name ,$surname, $gender, $m_name ,$f_name ,$birth_plc
        , $birth_date, $nation ,$photo_dir, $gradu_date, $hs_name, $hs_country, $dip_grade , $grade_system ,$period ,$country
        , $city , $adres ,  $tel , $mail, $time, $ip, $code){
        $servername = "localhost";
        $username = "Haseki";
        $password = "puceg1993";
        $dbName   = "yosveri";
    
        
        
        $conn = databaseCon($servername, $username, $password, $dbName);
    
        $conn->query("SET NAMES utf8");
        $conn->query("SET CHARACTER SET utf8");
        $conn->query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
        
        $sql = "INSERT INTO registry(receipt, passport, tcno, name, surname, gender, mot_name, fat_name, birth_plc, birth_date, nation, photo_dir, grad_year, high_name, high_city, grade, grade_sys, period, country, city, adress, phone, mail, entry_date, ip, entry_code) VALUES"
                . "('$receipt_date' , '$passport' ,'$tc_no' ,'$name' ,'$surname', '$gender', '$m_name' ,'$f_name' ,'$birth_plc'
        , '$birth_date', '$nation' ,'$photo_dir', '$gradu_date', '$hs_name', '$hs_country', '$dip_grade' , '$grade_system' ,'$period' ,'$country'
        , '$city' , '$adres' ,  '$tel' , '$mail', '$time', '$ip', '$code')";
        
        echo $sql."<br>";
        
        if (mysqli_query($conn, $sql)) {
            echo 'Data inserted<br>';
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT inserted<br>';
            mysqli_close($conn);
            return false;
        }
}

function checkRegistry ($passport){
        $servername = "localhost";
        $username = "Haseki";
        $password = "puceg1993";
        $dbName   = "yosveri";
    
        
        
        $conn = databaseCon($servername, $username, $password, $dbName);
    
        $conn->query("SET NAMES utf8");
        $conn->query("SET CHARACTER SET utf8");
        $conn->query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
        
        $sql = "SELECT passport , ip, entry_date as date FROM registry WHERE passport = '$passport'";
        
        echo $sql."<br>";
        
        if ($result = mysqli_query($conn, $sql)) {
            if(empty($result)){
                mysqli_close($conn);
                return false;
            } else {
                
                $result = mysqli_fetch_assoc($result);
                mysqli_close($conn);
                return $result;
            }
        } else {
            echo 'Data NOT inserted<br>';
            mysqli_close($conn);
            return false;
        }
}


function getRegistry ($passport){
        $servername = "localhost";
        $username = "Haseki";
        $password = "puceg1993";
        $dbName   = "yosveri";
    
        
        
        $conn = databaseCon($servername, $username, $password, $dbName);
    
        $conn->query("SET NAMES utf8");
        $conn->query("SET CHARACTER SET utf8");
        $conn->query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
        
        $sql = "SELECT * FROM registry WHERE passport = '$passport'";
        
        echo $sql."<br>";
        
        if ($result = mysqli_query($conn, $sql)) {
            if(empty($result)){
                mysqli_close($conn);
                return false;
            } else {
                
                $result = mysqli_fetch_assoc($result);
                mysqli_close($conn);
                return $result;
            }
        } else {
            echo 'Data NOT readed<br>';
            mysqli_close($conn);
            return false;
        }
}
?>