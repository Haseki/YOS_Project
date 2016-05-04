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
//$receipt_date = $result['receipt'];
$passport = $result['passport'];
//$tc_no = $result['tcno'];
$name = $result['name'];
//$surname = $result['surname'];
//$m_name = $result['mot_name'];
//$f_name = $result['fat_name'];
//$birth_plc = $result['birth_plc'];
//$birth_date = $result['birth_date'];
//$gradu_date = $result['grad_year'];
//$hs_name = $result['high_name'];
//$hs_country = $result['high_city'];
//$dip_grade = $result['grade'];
//$grade_system = $result['grade_sys'];
//$period = $result['period'];
//$gender = $result['gender'];
//$country = $result['country'];
//$city = $result['city'];
//$adres = $result['adress'];
//$nation = $result['nation'];
//$tel = $result['phone'];
//$mail = $result['mail'];
$ip = $result['ip'];
$time = $result['entry_date'];
//$status = $result['status'];
//$code = $result['entry_code'];
} else {
    echo 'DALE!';
}

?>
<script>

function back(){
    window.location = "./index.php";
}

</script>

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
                                                                    
                                                                            <div class="alert alert-danger center">
                                                                                <h4>Zaten <?php echo $passport; ?> no'lu pasaport kayıta mevcut </h4>
                                                                                <h4>We have <?php echo $passport; ?> passport number already</h4>
                                                                                <strong>Tarih (Date) : <?php echo $time;?></strong><br>
                                                                                <strong>IP : <?php echo $ip;?></strong><br>
                                                                            </div>
                                                                            <div class="alert alert-warning center">
                                                                                <p>Eğer kaydınızı güncellemek istiyorsanız <a href="./check_code_upd.php">buraya</a> tıklayınız. <br> If you want to update your registry press <a href="./check_code_upd.php">here</a></p>
                                                                                <p>Eğer kaydınızı görüntülemek istiyorsanız <a href="./check_code_view.php">buraya</a> tıklayınız. <br> If you want to view your registry press <a href="./check_code_view.php">here</a></p>
                                                                            </div>
                                                                            
                                                                <div class="form-group">
                                                                    <div class="col-sm-2 col-sm-offset-10">
                                                                        <button class="btn btn-success finish-step btn-block" onclick="back();">
                                                                            <i class="icon-circle-arrow-left"></i> Tamam (Okey)
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