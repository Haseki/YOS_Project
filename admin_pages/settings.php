<?php
include 'admin_header.php';
//include 'admin_submenu.php';
$name = $_SESSION['user'];
$result = getAdminByName($name);
$id = $error = "";

if($result) {
    $id = $result['id'];
} else {
    $id = 0;
}

if(isset($_GET['error'])) {
    $error = $_GET['error'];
} else {
    $error = 0;
}


function infoDiv($error){
    
    switch($error) {
        
        case 0:
            break;
        case 1:
            echo "<div class='alert alert-danger center'>"
            . "<p><i class='ace-icon fa fa-remove'></i>Parola hatalı girildi. Lutfen tekrar Deneyiniz. (ERROR : 1)</p></div>";
            break;
        case 2:
            echo "<div class='alert alert-danger center'>"
            . "<p><i class='ace-icon fa fa-remove'></i>Parola hatalı girildi. Lutfen tekrar Deneyiniz. (ERROR : 2)</p></div>";
            break;
        case 3:
            echo "<div class='alert alert-danger center'>"
            . "<p><i class='ace-icon fa fa-remove'></i>Tum alanları eksiksiz giriniz. (ERROR : 3)</p></div>";
            break;
        case 4:
            echo "<div class='alert alert-danger center'>"
            . "<p><i class='ace-icon fa fa-remove'></i>Girilen parolalar farklı! (ERROR : 4)</p></div>";
            break;
        case 5:
            echo "<div class='alert alert-danger center'>"
            . "<p><i class='ace-icon fa fa-remove'></i>ID'niz bulunamadı(ERROR : 5)</p></div>";
            break;
        case 6:
            echo "<div class='alert alert-danger center'>"
            . "<p><i class='ace-icon fa fa-remove'></i>Veri Tabanı Sorunu(ERROR : 6)</p></div>";
            break;
        default :
            break;
    }
    
    
    
}


?>
<body class="no-skin">
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <?php include 'admin_submenu.php'; ?>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">



                <!DOCTYPE html>

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">


                            <div class="space-6"></div>

                            <div id="signup-box" class="signup-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header green lighter bigger">
                                            <i class="ace-icon fa fa-gear blue"></i>
                                            Ayarlar
                                        </h4>

                                        <div class="space-6"></div>
                                        <p> Parola Yenileme </p>

                                        <form method="POST" action="pass_change.php" role="form">
                                            <input type="hidden" name="post-id" class="form-control" value="<?php echo $id;?>" />
                                            <fieldset>
                                                    
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="post-password" class="form-control" placeholder="Parola" />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="post-password-again" class="form-control" placeholder="Parola (Tekrar)" />
                                                        <i class="ace-icon fa fa-retweet"></i>
                                                    </span>
                                                </label>

                                               <div class="space-24"></div>
                                               <?php infoDiv($error);?>
                                               <div class="space-24"></div>
                                                <div class="clearfix">
                                                    <button type="reset" class="width-30 pull-left btn btn-sm">
                                                        <i class="ace-icon fa fa-refresh"></i>
                                                        <span class="bigger-110">Temizle</span>
                                                    </button>

                                                    <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                                        <span class="bigger-110">Kaydet</span>

                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </button>
                                                </div>
                                               
                                            </fieldset>
                                        </form>
                                    </div>

                                </div><!-- /.widget-body -->
                            </div><!-- /.signup-box -->
                        </div><!-- /.position-relative -->
                    </div>
                </div><!-- row -->




            </div>
        </div>
    </div>
</div>




</div>
</body>



