<?php 
include './data_handler.php';
include '../admin_pages/countries.php';
if(isset($_GET['passport'])){
    
$passport = $_GET['passport'];

}

if(empty($passport)){

    $passport = "318abc";

}

$result = getRegistry($passport);

if($result) {   
$receipt_date = $result['receipt'];
$passport = $result['passport'];
$tc_no = $result['tcno'];
$name = $result['name'];
$surname = $result['surname'];
$m_name = $result['mot_name'];
$f_name = $result['fat_name'];
$birth_plc = $result['birth_plc'];
$birth_date = $result['birth_date'];
$gradu_date = $result['grad_year'];
$hs_name = $result['high_name'];
$hs_country = $result['high_city'];
$dip_grade = $result['grade'];
$grade_system = $result['grade_sys'];
$period = $result['period'];
$gender = $result['gender'];
$country = $result['country'];
$city = $result['city'];
$adres = $result['adress'];
$nation = $result['nation'];
$tel = $result['phone'];
$mail = $result['mail'];
$ip = $result['ip'];
$time = $result['entry_date'];
$status = $result['status'];
$code = $result['entry_code'];
} else {
    echo 'DALE!';
}


?>

<!DOCTYPE html>
<html lang="en"><!--<![endif]--><!-- start: HEAD --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>RTEU-YOS 2015</title>
    <!-- start: META -->
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description">
    <meta content="" name="author">
    <link rel="icon" type="image/png" href="../images/rte-icon.png" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="assets/fonts/style.css">
                <link rel="stylesheet" href="css/main.css">
                    <link rel="stylesheet" href="css/main-responsive.css">

                        <link rel="stylesheet" href="assets/css/main.css">
                            <link rel="stylesheet" href="assets/css/main-responsive.css">
                                <link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
                                    <link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
                                        <link rel="stylesheet" href="assets/css/theme_light.css" id="skin_color">
                                            <link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">

                                                <link rel="stylesheet" href="assets/plugins/bootstrapformhelpers/css/bootstrap-formhelpers.css">
                                                    <!-- end: MAIN CSS -->
                                                    <!-- start: HTML5SHIV FOR IE8 -->
                                                    <!--[if lt IE 9]>
                                                    <script src="assets/plugins/html5shiv.js"></script>
                                                    <![endif]-->
                                                    <!-- end: HTML5SHIV FOR IE8 -->

                                                    </head>
                                                    <!-- end: HEAD -->
                                                    <body style="padding-top: 130px;">

                                                        <!-- start: HEADER -->
                                                        <header>

                                                            <!-- start: TOP BAR -->
                                                            <div class="clearfix " id="topbar">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <!-- start: TOP BAR CALL US -->
                                                                            <div class="callus">
                                                                                Recep Tayyip Erdoğan Üniversitesi Uluslararası Öğrenci Ofisi
                                                                            </div>
                                                                            <!-- end: TOP BAR CALL US -->
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="callus pull-right">
                                                                                Contact Email : oznur.tuzcu@erdogan.edu.tr Phone : +90 464 223 61 26 - 4259
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end: TOP BAR -->
                                                        </header>
                                                        <!-- end: HEADER -->
                                                        <!-- start: MAIN CONTAINER -->
                                                    <div class="main-container">
                                                        <!-- start: FORM WIZARD PANEL -->
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <form action="action_upd.php" role="form" class="smart-wizard form-horizontal" id="form" method="POST" enctype="multipart/form-data">
                                                                    <input type="hidden" name="IPAdres" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
                                                                    <div id="wizard" class="swMain">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#step-0">
                                                                                    <div class="stepNumber">
                                                                                        1
                                                                                    </div>
                                                                                    <span class="stepDesc"> 1. Adım
                                                                                        <br />
                                                                                        <small>Ödeme Bilgileri<br />(Payment Information)</small> </span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#step-1">
                                                                                    <div class="stepNumber">
                                                                                        2
                                                                                    </div>
                                                                                    <span class="stepDesc"> 2. Adım
                                                                                        <br />
                                                                                        <small>Kişisel Bilgiler <br />(Personal Information)</small> </span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#step-2">
                                                                                    <div class="stepNumber">
                                                                                        3
                                                                                    </div>
                                                                                    <span class="stepDesc"> 3. Adım
                                                                                        <br />
                                                                                        <small>Lise Bilgileri <br />(High School Information)</small> </span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#step-3">
                                                                                    <div class="stepNumber">
                                                                                        4
                                                                                    </div>
                                                                                    <span class="stepDesc"> 4. Adım
                                                                                        <br />
                                                                                        <small>Adres Bilgileri <br />(Address Information)</small> </span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#step-4">
                                                                                    <div class="stepNumber">
                                                                                        5
                                                                                    </div>
                                                                                    <span class="stepDesc"> 5. Adım
                                                                                        <br />
                                                                                        <small>İletişim Bilgileri<br /> (Contact Information)</small> </span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#step-5">
                                                                                    <div class="stepNumber">
                                                                                        6
                                                                                    </div>
                                                                                    <span class="stepDesc"> 6. Adım
                                                                                        <br />
                                                                                        <small>Kaydı Tamamla <br />(Registration Complete)</small> </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="progress progress-striped active progress-sm">
                                                                            <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress-bar progress-bar-success step-bar">
                                                                                <span class="sr-only"> 0% Tamamlandı (Başarılı)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div id="step-0">
                                                                            <h2 class="StepTitle">Ödeme Bilgileri(Payment Information)</h2>
                                                                            <div class="alert alert-info center">
                                                                                <p>Adayların başvuru formunu doldurmadan önce YÖS başvuru ücreti olan  $25 ya da 50 TL 'yi aşağıda yazılı banka hesap numarasına ödemeleri gerekmektedir.</p>
                                                                                <p>
                                                                                    <strong>Banka Adı:</strong> Vakıflar Bankası<br />
                                                                                    <strong>Hesap Adı:</strong> Recep Tayyip Erdoğan Üniversitesi Döner Sermaye İşletme Müdürlüğü<br />
                                                                                    Rize Şubesi<br />
                                                                                    <strong>IBAN:</strong> TR41 0001 5001 5800 7294 6356 90<br />
                                                                                </p>
                                                                            </div>
                                                                            <div class="alert alert-info center">
                                                                                <p>Before completing the application form, candidates are required to pay the application fee of YOS ($25 or 50TL) to the bank account written below.</p>
                                                                                <p>
                                                                                    <strong>Name of the Bank:</strong> Vakıflar Bankası<br />
                                                                                    <strong>Name of the Account:</strong> Recep Tayyip Erdoğan Üniversitesi Döner Sermaye İşletme Müdürlüğü<br />
                                                                                    Rize Şubesi<br />
                                                                                    <strong>IBAN:</strong> TR41 0001 5001 5800 7294 6356 90<br />
                                                                                </p>
                                                                            </div>

                                                                            <div class="alert alert-success center">
                                                                                Dekont tarihini giriniz. (Enter your payment receipt date)
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Dekont Tarihi (Receipt Date)<span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control input-mask-date" id="postReceiptDate" name="postReceiptDate" placeholder="Ay/Gün/Yıl formatında giriniz. (Please fill mm/dd/YYYY formatting)..." value ="<?php echo $receipt_date;?>">
                                                                                </div>
                                                                            </div>
                                                                            <!--<div class="form-group">
                                                                                    <label class="col-sm-3 control-label">
                                                                                            Dekont Tarihi (Receipt Date) <span class="symbol required"></span>
                                                                                    </label>
                                                                                    <div class="col-sm-7">
                                                                                            <div class="fileupload fileupload-new" data-provides="fileupload"><input name="" value="" type="hidden">
                                                                                            
                                                                                                    <div class="input-group">
                                                                                                            <div class="form-control uneditable-input">
                                                                                                                    <i class="icon-file fileupload-exists"></i>
                                                                                                                    <span class="fileupload-preview"></span>
                                                                                                            </div>
                                                                                                            <div class="input-group-btn">
                                                                                                                    <div class="btn btn-light-grey btn-file">
                                                                                                                            <span class="fileupload-new"><i class="icon-folder-open-alt"></i> Resim Seç (Select Image)</span>
                                                                                                                            <span class="fileupload-exists"><i class="icon-folder-open-alt"></i> Değiştir (Change)</span>
                                                                                                                            <input name="postDekont" id="postDekont" class="file-input" type="file">
                                                                                                                    </div>
                                                                                                                    <a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
                                                                                                                            <i class="icon-remove"></i> Sil (Remove)
                                                                                                                    </a>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                            </div>-->
                                                                            <div class="form-group">
                                                                                <div class="col-sm-2 col-sm-offset-8">
                                                                                    <button class="btn btn-blue next-step btn-block">
                                                                                        İleri (Next) <i class="icon-circle-arrow-right"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="step-1">
                                                                            <h2 class="StepTitle">Kişisel Bilgiler (Personal Information)</h2>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Pasaport No (pasaport) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postPasaport" name="postPassport" placeholder="Pasaport No..." value ="<?php echo $passport;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    T.C. Kimlik No (Varsa)
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postKimlik" name="postKimlik" placeholder="TC Kimlik No..." value ="<?php echo $tc_no;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Ad (Name) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postName" name="postName" placeholder="Adınız(Your Name)..." value ="<?php echo $name;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Soyad (Surname) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postSurname" name="postSurname" placeholder="Soyadınız(Surname)..." value ="<?php echo $surname;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Cinsiyet (Gender) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio" class="grey" value="f" name="postGender" <?php if($gender == "f") {echo 'checked';} ?>>
                                                                                            Kız (Female)
                                                                                    </label>
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio" class="grey" value="m" name="postGender" <?php if($gender == "m") {echo 'checked';} ?>>
                                                                                            Erkek (Male)
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Anne Adı (Mother Name)<span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postMother" name="postMother" placeholder="Anne Adınız (Your Mother Name)..." value ="<?php echo $m_name;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Baba Adı (Father Name)<span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postFather" name="postFather" placeholder="Baba Adınız (Your Father Name)..." value ="<?php echo $f_name;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Doğum Yeri (BirthPlace)<span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postBirthPlace" name="postBirthPlace" placeholder="Doğum Yeriniz (Birth Place)..." value ="<?php echo $birth_plc;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Doğum Tarihi (BirthDate)<span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control input-mask-date" id="postBirthDate" name="postBirthDate" placeholder="Ay/Gün/Yıl formatında giriniz. (Please fill mm/dd/YYYY formatting)..." value ="<?php echo $birth_date;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Ülke (Country) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <!-- <div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true"></div>-->
                                                                                            <!-- <select class="form-control" id="postNationality" name="postNationality" class="form-control search-select">
                                                                                                    <option value="">&nbsp;</option>
                                                                                                    <option value="Country 1">Country 1</option>
                                                                                                    <option value="Country 2">Country 2</option>
                                                                                                    <option value="Country 3">Country 3</option>
                                                                                            </select>-->
                                                                                    <select id="postNationality" name="postNationality" class="form-control">
                                                                                        <?php writeCountry($nation);  ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Resim (Photo) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <div class="fileupload fileupload-new" data-provides="fileupload"><input name="" value="" type="hidden">

                                                                                            <div class="input-group">
                                                                                                <div class="form-control uneditable-input">
                                                                                                    <i class="icon-file fileupload-exists"></i>
                                                                                                    <span class="fileupload-preview"></span>
                                                                                                </div>
                                                                                                <div class="input-group-btn">
                                                                                                    <div class="btn btn-light-grey btn-file">
                                                                                                        <span class="fileupload-new"><i class="icon-folder-open-alt"></i> Resim Seç (Select Image)</span>
                                                                                                        <span class="fileupload-exists"><i class="icon-folder-open-alt"></i> Değiştir (Change)</span>
                                                                                                        <input name="postPicture" id="postPicture" class="file-input" type="file">
                                                                                                    </div>
                                                                                                    <a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
                                                                                                        <i class="icon-remove"></i> Sil (Remove)
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="col-sm-2 col-sm-offset-3">
                                                                                    <button class="btn btn-light-grey back-step btn-block">
                                                                                        <i class="icon-circle-arrow-left"></i> Geri (Back)
                                                                                    </button>
                                                                                </div>
                                                                                <div class="col-sm-2 col-sm-offset-3">
                                                                                    <button class="btn btn-blue next-step btn-block">
                                                                                        İleri (Next) <i class="icon-circle-arrow-right"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div id="step-2">
                                                                            <h2 class="StepTitle">Lise Bilgileri (High School Information)</h2>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Lise Mezuniyet Tarihi (High School Graduation Date)</span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control input-mask-date" id="postLiseGraduateDate" name="postGraduDate" placeholder="Ay/Gün/Yıl formatında giriniz. (Please fill mm/dd/YYYY formatting)..." value ="<?php echo $gradu_date;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Mezun Olduğu Lisenin Adı (Name of the High School you graduated) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postLiseName" name="postHighSchName" placeholder="Lisenin Adı (Name of the High School).." value ="<?php echo $hs_name;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Mezun olduğu lisenin bulunduğu ülke ve şehir (Country-City of the high school you graduated) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postLiseCity" name="postHighSchCity" placeholder="Lisenin bulunduğu ülke/şehir (Country-City of the High School).." value ="<?php echo $hs_country;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Diploma Notu (Diploma Grade)</span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postDegree" name="postDegree" placeholder="Diploma Notu (Diploma Grade)" value ="<?php echo $dip_grade;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Not Sistemi (Grading System) 
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postGradeSystem" name="postGradeSystem" placeholder="Not Sistemi (Grading System)" value ="<?php echo $grade_system;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Toplam Eğitim Süresi (Total Period of Study) 
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postTotal" name="postPeriod" placeholder="Toplam Eğitim Süresi (Total Period of Study)" value ="<?php echo $period;?>">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <div class="col-sm-2 col-sm-offset-3">
                                                                                    <button class="btn btn-light-grey back-step btn-block">
                                                                                        <i class="icon-circle-arrow-left"></i> Geri (Back)
                                                                                    </button>
                                                                                </div>
                                                                                <div class="col-sm-2 col-sm-offset-3">
                                                                                    <button class="btn btn-blue next-step btn-block">
                                                                                        İleri (Next) <i class="icon-circle-arrow-right"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="step-3">
                                                                            <h2 class="StepTitle">Adres Bilgileri (Address Information)</h2>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Ülke (Country) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <!-- <div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true"></div>-->
                                                                                    <select class="form-control" id="postCountry" name="postCountry">
                                                                                       <?php writeCountry($country);  ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Şehir (City) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postCity" name="postCity" placeholder="Şehir (City).." value ="<?php echo $city;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Adres (Address) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postAdres" name="postAdress" placeholder="Address.." value ="<?php echo $adres;?>">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <div class="col-sm-2 col-sm-offset-3">
                                                                                    <button class="btn btn-light-grey back-step btn-block">
                                                                                        <i class="icon-circle-arrow-left"></i> Geri (Back)
                                                                                    </button>
                                                                                </div>
                                                                                <div class="col-sm-2 col-sm-offset-3">
                                                                                    <button class="btn btn-blue next-step btn-block">
                                                                                        İleri (Next) <i class="icon-circle-arrow-right"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="step-4">
                                                                            <h2 class="StepTitle">İletişim Bilgileri (Contact Information)</h2>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    Telefon (Phone) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control" id="postPhone" name="postPhone" placeholder="Telefon (Phone).." value ="<?php echo $tel;?>">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">
                                                                                    E-Mail (Mail Address) <span class="symbol required"></span>
                                                                                </label>
                                                                                <div class="col-sm-7">
                                                                                    <input type="email" class="form-control" id="postMail" name="postMail" placeholder="E-Mail (Mail Address)" value ="<?php echo $mail;?>">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <div class="col-sm-2 col-sm-offset-3">
                                                                                    <button class="btn btn-light-grey back-step btn-block">
                                                                                        <i class="icon-circle-arrow-left"></i> Geri (Back)
                                                                                    </button>
                                                                                </div>
                                                                                <div class="col-sm-2 col-sm-offset-3">
                                                                                    <button class="btn btn-blue next-step btn-block">
                                                                                        İleri (Next)<i class="icon-circle-arrow-right"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="step-5">
                                                                            <h2 class="StepTitle">Kaydı Tamamla (Registration Complete)</h2>
                                                                            <div class="col-md-4">
                                                                                <h3>Kişisel Bilgiler (Personal Information)</h3>
                                                                                <table class="table table-bordered">
                                                                                    <tr>
                                                                                        <td><strong>Pasaport No (pasaport) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postPassport"></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>T.C. Kimlik No (Varsa) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postKimlik"></span></td>
                                                                                    </tr><tr>
                                                                                        <td><strong>Ad (Name)  : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postName"></span></td>
                                                                                    </tr><tr>
                                                                                        <td><strong>Soyad (Surname) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postSurname"></span></td>
                                                                                    </tr>
                                                                                    <!--
                                                                                    <tr>
                                                                                            <td><strong>Cinsiyet (Gender) : </strong></td>
                                                                                            <td><span class="form-control-static display-value" data-display="postGender"></span></td>
                                                                                    </tr>
                                                                                    -->
                                                                                    <tr>
                                                                                        <td><strong>Anne Adı (Mother Name) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postMother"></span></td>
                                                                                    </tr><tr>
                                                                                        <td><strong>Baba Adı (Father Name) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postFather"></span></td>
                                                                                    </tr><tr>
                                                                                        <td><strong>Doğum Yeri (BirthPlace) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postBirthPlace"></span></td>
                                                                                    </tr><tr>
                                                                                        <td><strong>Doğum Tarihi (BirthDate) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postBirthDate"></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Uyruk (Nationality)  : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postNationality"></span></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <h3>Lise Bilgileri (High School Information)</h3>
                                                                                <table class="table table-bordered">
                                                                                    <tr>
                                                                                        <td><strong>Lise Mezuniyet Tarihi <br/>(High School Graduation Date) :</strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postGraduDate"></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Mezun Olduğu Lisenin Adı <br/>(Name of the High School you graduated)  : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postHighSchName"></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Mezun olduğu lisenin bulunduğu ülke ve şehir <br/>(Country-City of the high school you graduated)  : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postHighSchCity"></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Diploma Notu <br/>(Diploma Grade) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postDegree"></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Not Sistemi <br/>(Grading System) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postGradeSystem"></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Toplam Eğitim Süresi <br/>(Total Period of Study) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postPeriod"></span></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <h3>Adres Bilgileri (Address Information)</h3>
                                                                                <table class="table table-bordered">
                                                                                    <tr>
                                                                                        <td><strong>Ülke (Country) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postCountry"></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Şehir (City) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postCity"></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Adres : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postAdress"></span></td>
                                                                                    </tr>
                                                                                </table>

                                                                                <h3>İletişim Bilgileri (Contact Information)</h3>
                                                                                <table class="table table-bordered">
                                                                                    <tr>
                                                                                        <td><strong>Telefon (Phone) : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postPhone"></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>E-mail : </strong></td>
                                                                                        <td><span class="form-control-static display-value" data-display="postMail"></span></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>



                                                                            <div class="form-group">
                                                                                <div class="col-sm-2 col-sm-offset-8">
                                                                                    <button class="btn btn-success finish-step btn-block">
                                                                                        Kayıt Ol (Finish) <i class="icon-circle-arrow-right"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- end: FORM WIZARD PANEL -->
                                                    </div>
                                                    <!-- end: MAIN CONTAINER -->
                                                    <!-- start: FOOTER -->
                                                    <footer id="footer">

                                                        <div class="footer-copyright">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <a>
                                                                            Bilgi İşlem Daire Başkanlığı
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </footer>

                                                    <!-- end: FOOTER -->
                                                    <!-- start: MAIN JAVASCRIPTS -->
                                                    <!--[if lt IE 9]>
                                                    <script src="assets/plugins/respond.min.js"></script>
                                                    <script src="assets/plugins/excanvas.min.js"></script>
                                                    <![endif]-->
                                                    <script src="js/jquery-1.11.1.min.js"></script>
                                                    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
                                                    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
                                                    <script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
                                                    <script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
                                                    <script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
                                                    <script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
                                                    <script src="assets/js/main.js"></script>
                                                    <!-- end: MAIN JAVASCRIPTS -->
                                                    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
                                                    <script src="assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
                                                    <script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
                                                    <script src="assets/plugins/select2/select2.min.js"></script>
                                                    <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
                                                    <script src="assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
                                                    <script src="assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
                                                    <script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
                                                    <script src="assets/js/form-elements.js"></script>
                                                    <script src="assets/js/form-wizard.js"></script>


                                                    <script src="assets/plugins/bootstrapformhelpers/js/bootstrap-formhelpers.js"></script>

                                                    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

                                                    <script>
                                                        jQuery(document).ready(function () {
                                                            Main.init();
                                                            FormWizard.init();
                                                            FormElements.init();
                                                        });
                                                    </script>
                                                    </body>
                                                    </html>