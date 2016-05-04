<?php
$url = $_GET['url'];
?>
<script>

    function back(url) {
        console.log(url);
        window.location = "./" + url;
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
                                                                               <h4>Üzgünüz! Girdiğiniz giriş kodu veya pasaport yanlış. Lütfen tekrar deneyiniz. Eğer şifrenizi unuttuysanız şu adrese mail atınız: yavuz.yildiz@erdogan.edu.tr</h4>
                                                                               <h4>Sorry! The Code or passport you have entered is invalid. Please try again. If you forget your entry code please contact: yavuz.yildiz@erdogan.edu.tr</h4>
                                                                            </div>
                                                                      
                                                                            
                                                                <div class="form-group">
                                                                    <div class="col-sm-2 col-sm-offset-1">
                                                                        <button class="btn btn-success finish-step btn-block" onclick="back('<?php echo $url?>');">
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