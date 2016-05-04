<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
$receipt_date = $passport = $tc_no = $name = $surname = $m_name = $f_name = $birth_plc = $birth_date = "";
$gradu_date = $hs_name = $hs_country = $dip_grade = $grade_system = $period = $gender = "";
$country = $city = $adres = $nation = "";
$tel = $mail = "";
?>

<html>
    <head>
        <meta charset="UTF-8">
    <link rel='stylesheet' type = 'text/css' href='default.css'> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>YOS - Başvuru Sistemi</title>

		<meta name="description" content="and Validation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/css/font-awesome.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../assets/css/select2.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.js"></script>
        <title></title>
    </head>
    <body>



    <div class="header"> <label id="title">YOS Kayıt Formu</label></div>
    <div class="form-back">
        <form method="POST" action="action.php" class="form-body" enctype="multipart/form-data">

            <label id="info-text">Dekont Tarihi (Receipt Date) <label id="require-text">*</label> : </label>                
            <input id="form-text" type="date" name="receipt_date" value="<?php echo $receipt_date ?>"></input><br><br>

            <label id="title">Kişisel Bilgiler (Personal Info)</label><br><br>  

            <label id="info-text">Passport No (Passport No) <label id="require-text">*</label> : </label>
            <input id="form-text" type="text" name="passport" value="<?php echo $passport ?>"></input><br>

            <label id="info-text">TC Kimlik No(Varsa) : </label>
            <input type="text" name="tc_no" value="<?php echo $tc_no ?>"></input><br>

            <label id="info-text">Ad (Name) <label id="require-text">*</label> : </label>
            <input type="text" name="name" value="<?php echo $name ?>"></input><br>

            <label id="info-text">Soyad (Surname) <label id="require-text">*</label> : </label>
            <input type="text" name="surname" value="<?php echo $surname ?>"></input><br>

            <label id="info-text">Cinsiyet (Gender) <label id="require-text">*</label> : </label>
            <input type="radio" name="gender" value="1" checked>Kız (Female)</input>
            <input type="radio" name="gender" value="2">Erkek (Male)</input><br>

            <label id="info-text">Anne Adı (Mother Name) <label id="require-text">*</label> : </label>
            <input type="text" name="m_name" value="<?php echo $m_name ?>"></input><br>

            <label id="info-text">Baba Adı (Father Name) <label id="require-text">*</label> : </label>
            <input type="text" name="f_name" value="<?php echo $f_name ?>"></input><br>

            <label id="info-text">Doğum yeri (Birth Place) <label id="require-text">*</label> : </label>
            <input type="text" name="birth_plc" value="<?php echo $birth_plc ?>"></input><br>

            <label id="info-text">Doğum Tarihi (Birth Date) <label id="require-text">*</label> : </label>
            <input type="date" name="birth_date" value="<?php echo $birth_date ?>"></input><br>

            <label id="info-text">Ülke (Country) <label id="require-text">*</label> : </label>
            <select type="list" name="nation">
                <option value="Turkey">Türkiye</option> 
                <option value="Murica">United States Of America</option>  
                <option value="Japan">Japan</option> 
            </select><br>

            <label id="info-text">Fotoğraf (Photo) <label id="require-text">*</label> : </label>
            <input type="file" name="upfile"></input><br><br>

            <label id="title">Lise Bilgileri (High Scholl Info)</label><br><br>  

            <label id="info-text">Lise Mezuniyet Yılı (High School Graduate Year) : </label>
            <input type="date" name="gradu_date" value="<?php echo $gradu_date ?>"></input><br>

            <label id="info-text">Mezun Olunan Lisenin Adı (Name of the High School you graduated)<label id="require-text">*</label> : </label>
            <input type="text" name="hs_name" value="<?php echo $hs_name ?>"></input><br>

            <label id="info-text">Mezun Olunan Lisenin Bulunduğu Şehir / Ülke (Country-city Name of the High Scholl you graduated)<label id="require-text">*</label> : </label>
            <input type="text" name="hs_country" value="<?php echo $hs_country ?>"></input><br>

            <label id="info-text">Diploma Notu (Diploma Grade): </label>
            <input type="text" name="dip_grade" value="<?php echo $dip_grade ?>"></input><br>

            <label id="info-text">Not Sistemi (Grading System): </label>
            <input type="text" name="grade_system" value="<?php echo $grade_system ?>"></input><br>

            <label id="info-text">Toplam Eğitim Süresi (Total Period of Study): </label>
            <input type="text" name="period" value="<?php echo $period ?>"></input><br><br>

            <label id="title">Adres Bilgileri (Adress Info)</label><br><br> 

            <label id="info-text">Ülke (Country)<label id="require-text">*</label>: </label>

            <select name='country'>
                <option value='Turkey'>Türkiye</option>
                <option value='America'>USA</option>
                <option value='Japan'>Japan</option>
            </select><br>

            <label id="info-text">Şehir (City)<label id="require-text">*</label>: </label>
            <input type="text" name="city" value="<?php echo $city ?>"></input><br>

            <label id="info-text">Adres (Adress)<label id="require-text">*</label>: </label>
            <input type="text" name="adres" value="<?php echo $adres ?>"></input><br><br>

            <label id="title">İletişim Bilgileri (Contact Info)</label><br><br>

            <label id="info-text">Telefon (Phone)<label id="require-text">*</label>: </label>
            <input type="text" name="tel" value="<?php echo $tel ?>"></input><br>

            <label id="info-text">E-posta (E-mail)<label id="require-text">*</label>: </label>
            <input type="text" name="mail" value="<?php echo $mail ?>"></input><br><br>

            <input type="submit" name="submit" value="Tamamla (Complete)"></input><br><br>

        </form>
    </div>  
</div>

<div class="form-group">
    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Platform</label>

    <div class="col-xs-12 col-sm-9">
        <div class="clearfix">
            <select class="input-medium" id="platform" name="platform">
                <option value="">------------------</option>
                <option value="linux">Linux</option>
                <option value="windows">Windows</option>
                <option value="mac">Mac OS</option>
                <option value="ios">iOS</option>
                <option value="android">Android</option>
            </select>
        </div>
    </div>
</div>   


</body>
</html>
