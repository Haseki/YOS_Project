
<?php
include './data_handler.php';
if(isset($_GET['passport'])){
    
$passport = $_GET['passport'];

}

if(empty($passport)){

    $passport = "318bfc221";

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

<script>

function back(){
    window.location = "./index.php";
}

</script>
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

                                                                <div id="step-5">
                                                                            <div class="alert alert-success center">
                                                                                <p>Görüntülemek istediğiniz bilgiler alttadır. The informations you wanted to view are below</p>
                                                                                <p>Giriş Tarihi(Entry Date): <?php echo $time ?>  - IP : <?php echo $ip ?></p>
                                                                            </div>
                                                                            <div class="alert alert-warning center">
                                                                                <p>DİKKAT ! Aşağıdaki giriş kodunuzu lütfen saklayınız. Bu kod kaydınızı güncellemek ve görüntülemek için kullanılabilir. 
                                                                                    Bu kodu kaybetmeniz durumunda kaydınızı değiştiremez ya da görüntüleyemezsiniz. Eğer giriş kodunu kaybederseniz şu adrese mail atınız : yavuz.yildiz@erdogan.edu.tr</p> 
                                                                                <p>WARNING ! Please keep your entry code given below. This code can be used for viewing or updating to your registry. 
                                                                                    If you lose this code you can not change or view your registry after. If you lose your entry code please send mail to these adress : yavuz.yildiz@erdogan.edu.tr</p>
                                                                                <h2>GİRİŞ KODU / ENTRY CODE</h1>
                                                                                <h2><?php echo $code;?></h1>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <h3>Kişisel Bilgiler (Personal Information)</h3>
                                                                                <table class="table table-bordered">
                                                                                    <tr>
                                                                                        <td><strong>Pasaport No (pasaport) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $passport ?> </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>T.C. Kimlik No (Varsa) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $tc_no ?> </span></td>
                                                                                    </tr><tr>
                                                                                        <td><strong>Ad (Name)  : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $name ?> </span></td>
                                                                                    </tr><tr>
                                                                                        <td><strong>Soyad (Surname) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $surname ?> </span></td>
                                                                                    </tr>
                                                                                    <!--
                                                                                    <tr>
                                                                                            <td><strong>Cinsiyet (Gender) : </strong></td>
                                                                                            <td><span class="form-control-static display-value" data-display="postGender"></span></td>
                                                                                    </tr>
                                                                                    -->
                                                                                    <tr>
                                                                                        <td><strong>Anne Adı (Mother Name) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $m_name ?> </span></td>
                                                                                    </tr><tr>
                                                                                        <td><strong>Baba Adı (Father Name) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $f_name ?> </span></td>
                                                                                    </tr><tr>
                                                                                        <td><strong>Doğum Yeri (BirthPlace) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $birth_plc ?> </span></td>
                                                                                    </tr><tr>
                                                                                        <td><strong>Doğum Tarihi (BirthDate) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $birth_date ?> </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Uyruk (Nationality)  : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $nation ?> </span></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <h3>Lise Bilgileri (High School Information)</h3>
                                                                                <table class="table table-bordered">
                                                                                    <tr>
                                                                                        <td><strong>Lise Mezuniyet Tarihi <br/>(High School Graduation Date) :</strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $gradu_date ?> </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Mezun Olduğu Lisenin Adı <br/>(Name of the High School you graduated)  : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $hs_name ?> </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Mezun olduğu lisenin bulunduğu ülke ve şehir <br/>(Country-City of the high school you graduated)  : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $hs_country ?> </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Diploma Notu <br/>(Diploma Grade) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $dip_grade ?> </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Not Sistemi <br/>(Grading System) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $grade_system ?> </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Toplam Eğitim Süresi <br/>(Total Period of Study) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $period ?> </span></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <h3>Adres Bilgileri (Address Information)</h3>
                                                                                <table class="table table-bordered">
                                                                                    <tr>
                                                                                        <td><strong>Ülke (Country) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $country ?> </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Şehir (City) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $city ?> </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Adres : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $adres ?> </span></td>
                                                                                    </tr>
                                                                                </table>

                                                                                <h3>İletişim Bilgileri (Contact Information)</h3>
                                                                                <table class="table table-bordered">
                                                                                    <tr>
                                                                                        <td><strong>Telefon (Phone) : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $tel ?> </span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>E-mail : </strong></td>
                                                                                        <td><span class="form-control-static display-value"><?php echo $mail ?> </span></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                
                                                                
                                                                
                                                                <div class="form-group">
                                                                    <div class="col-sm-2 col-sm-offset-1">
                                                                        <button class="btn btn-success finish-step btn-block" onclick="back();">
                                                                            <i class="icon-circle-arrow-left"></i> Geri (Back)
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                
                                                                
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