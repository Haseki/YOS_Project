<?php

function databaseCon ()
{
    
    $servername = "localhost";
    $username = "Haseki";
    $password = "puceg1993";
    $database = "yosveri";
    
    
// Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return false;
    }else
    {
        $conn->query("SET NAMES utf8");
        $conn->query("SET CHARACTER SET utf8");
        $conn->query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
        return $conn;
    }
}
        

//    $receipt_date = $passport = $tc_no = $name = $surname = $m_name = $f_name = $birth_plc = $birth_date = "";
//    $gradu_date = $hs_name= $hs_country = $dip_grade = $grade_system = $period = $gender = ""       ;
//    $country = $city = $adres = $nation =""       ;
//    $tel = $mail = ""       ;

function updateCode ($id , $code){

        $conn = databaseCon();

        $sql = "UPDATE registry SET "
                . "entry_code = '$code'"
                . " WHERE id = $id";
        
        echo $sql;
        
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

function updatePass ($id , $pass){

        $conn = databaseCon();

        $sql = "UPDATE admins SET "
                . "password = '$pass'"
                . " WHERE id = $id";
        
        echo $sql;
        
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



function updateStatus ($id , $status){

        $conn = databaseCon();

        $sql = "UPDATE registry SET "
                . "status = $status"
                . " WHERE id = '$id'";
        
        echo $sql;
        
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

function updateRegistryAdmin ($id, $receipt_date , $passport ,$tc_no ,$name ,$surname, $gender, $m_name ,$f_name ,$birth_plc
        , $birth_date, $nation , $gradu_date, $hs_name, $hs_country, $dip_grade , $grade_system ,$period ,$country
        , $city , $adres ,  $tel , $mail,$status){

        $conn = databaseCon();

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
                . "status = $status"
                . " WHERE id=$id ";
        
        echo $sql;
        
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


        $conn = databaseCon();
        
        $sql = "INSERT INTO registry(receipt, passport, tcno, name, surname, gender, mot_name, fat_name, birth_plc, birth_date, nation, photo_dir, grad_year, high_name, high_city, grade, grade_sys, period, country, city, adress, phone, mail, entry_date, ip, entry_code) VALUES"
                . "('$receipt_date' , '$passport' ,'$tc_no' ,'$name' ,'$surname', '$gender', '$m_name' ,'$f_name' ,'$birth_plc'
        , '$birth_date', '$nation' ,'$photo_dir', '$gradu_date', '$hs_name', '$hs_country', '$dip_grade' , '$grade_system' ,'$period' ,'$country'
        , '$city' , '$adres' ,  '$tel' , '$mail', '$time', '$ip', '$code')";
        
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
     
        
        $conn = databaseCon();
        
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
        
        
        $conn = databaseCon();
    
        $sql = "SELECT * FROM registry WHERE passport = '$passport'";
        
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

function getRegistryID ($id){
        
        
        $conn = databaseCon();
    
        $sql = "SELECT * FROM registry WHERE id = '$id'";
        
        
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

function getAllRegistry(){
        
        
        $conn = databaseCon();
    
        $sql = "SELECT * FROM registry WHERE 1";
        
        
        if ($result = mysqli_query($conn, $sql)) {
            if(empty($result)){
                mysqli_close($conn);
                return false;
            } else {
                mysqli_close($conn);
                return $result;
            }
        } else {
            echo 'Data NOT readed<br>';
            mysqli_close($conn);
            return false;
        }
}

//
////
////ADMİN İLE ALAKALI KODLAR AŞAĞIDA
//
//
//
//
//
//
//
//
//
//
//
//
//


function insertAdmin ($name , $pass, $email, $entry_time, $autho_create,$autho_cons , $autho_change ){
            
        $conn = databaseCon();
        
        $sql = "INSERT INTO admins(username , password, email, entry_time ,autho_create, autho_cons , autho_change ) VALUES"
                . "('$name' , '$pass', '$email', '$entry_time', $autho_create ,$autho_cons , $autho_change)";
        
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

function updateAdmin ($id , $name , $pass, $email, $entry_time, $autho_create,$autho_cons,$autho_change ){
            
        $conn = databaseCon();
        
        $sql = "UPDATE admins SET "
                . "username = '$name'," 
                . "password = '$pass',"
                . "email = '$email',"
                . "entry_time = '$entry_time',"
                . "autho_create = $autho_create,"
                . "autho_cons = $autho_cons,"
                . "autho_change = $autho_change"
                . " WHERE id = $id";
        
        
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

function isAdminExist ($name){
        
        $conn = databaseCon();
        
        $sql = "SELECT * FROM admins WHERE username = '$name'";

        if ($result = mysqli_query($conn, $sql)) {
                        
            if(mysqli_num_rows($result) == 0)
            {
                return false;
            }
            
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
}


function checkAdmin ($name , $pass){
        
        $conn = databaseCon();
        
        $sql = "SELECT * FROM admins WHERE username = '$name' AND password = '$pass'";

        if ($result = mysqli_query($conn, $sql)) {
                        
            if(mysqli_num_rows($result) == 0)
            {
                return false;
            }
            
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
}

function entryUpdate ($name , $entry){

        $conn = databaseCon();
        
        $sql = "UPDATE admins SET entry_time = '$entry' WHERE username = '$name'";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
}

function checkSessionAdmin ($name , $pass , $entry){

        $conn = databaseCon();
        
        $sql = "SELECT * FROM admins WHERE username = '$name' AND password = '$pass' AND entry_time = '$entry'";

        if ($result = mysqli_query($conn, $sql)) {
                        
            if(mysqli_num_rows($result) == 0)
            {
                return false;
            }
            
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
}

function getStatus($status){

        $conn = databaseCon();
        
        $sql = "SELECT COUNT(status) as number FROM registry WHERE status = $status";

        if ($result = mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            
            
            $result = mysqli_fetch_assoc($result);
            $number = $result['number'];
            if($number <=0)
            {
                return 0;
            }  else 
                {
                return $number;
            }
            
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
}

function getAutho($name){

        $conn = databaseCon();
        
        $sql = "SELECT autho_create as crt, autho_cons as cons, autho_change as chg FROM admins WHERE username = '$name'";
            
        if ($result = mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            
            
            $result = mysqli_fetch_assoc($result);
            
            return $result;
            
        } else {
            echo 'Data NOT checked Successfully AUTHO<br>';
            mysqli_close($conn);
            return false;
        }
}

function getAdminByName($name){

        $conn = databaseCon();
        
        $sql = "SELECT * FROM admins WHERE username = '$name'";
            
        if ($result = mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            
            
            $result = mysqli_fetch_assoc($result);
            
            return $result;
            
        } else {
            echo 'Data NOT checked Successfully AUTHO<br>';
            mysqli_close($conn);
            return false;
        }
}

function deleteAdminByID($id){

        $conn = databaseCon();
        
        $sql = "DELETE FROM admins WHERE id = $id";
            
        if ($result = mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            
            
            $result = mysqli_fetch_assoc($result);
            
            return $result;
            
        } else {
            echo 'Data NOT checked Successfully AUTHO<br>';
            mysqli_close($conn);
            return false;
        }
}

function getAdminByID($id){

        $conn = databaseCon();
        
        $sql = "SELECT * FROM admins WHERE id= $id";
            
        if ($result = mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            
            
            $result = mysqli_fetch_assoc($result);
            
            return $result;
            
        } else {
            echo 'Data NOT checked Successfully AUTHO<br>';
            mysqli_close($conn);
            return false;
        }
}

function getAllAdmins(){
        
        
        $conn = databaseCon();
    
        $sql = "SELECT * FROM admins WHERE 1";
        
        
        if ($result = mysqli_query($conn, $sql)) {
            if(empty($result)){
                mysqli_close($conn);
                return false;
            } else {
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