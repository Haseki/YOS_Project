<?php
include 'admin_header.php';
//include 'admin_submenu.php';
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
                                            <i class="ace-icon fa fa-users blue"></i>
                                            Yeni Admin Oluştur
                                        </h4>

                                        <div class="space-6"></div>
                                        <p> Bilgileri Giriniz: </p>

                                        <form method="POST" action="create_admin.php" role="form">
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="email" name="post-email"class="form-control" placeholder="Email" />
                                                        <i class="ace-icon fa fa-envelope"></i>
                                                    </span>
                                                </label>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="post-username" class="form-control" placeholder="Kullanıcı Adı" />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>

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

                                                <div class="space-6"></div>

                                                <span class="red">Yetkiler</span><br>
                                                <div class="space-6"></div>



                                                <label class="block clearfix">

                                                    <label class="control-label col-xs-3 col-sm-9">Kayıt değerlendirme</label>
                                                    <input name="post-autho-cons" value = "true" class="ace ace-switch ace-switch-6" type="checkbox">
                                                        <span class="lbl"></span><br>
                                                        </label>

                                                        </label>

                                                        <label class="block clearfix">

                                                            <label class="control-label col-xs-3 col-sm-9">Kayıt değiştirme</label>
                                                            <input name="post-autho-change" value="true" class="ace ace-switch ace-switch-6" type="checkbox">
                                                                <span class="lbl"></span><br>
                                                                </label>

                                                                </label>

                                                                <label class="block clearfix">

                                                                    <label class="control-label col-xs-3 col-sm-9">Admin Oluşturma</label>
                                                                    <input name="post-autho-create" value="true"  class="ace ace-switch ace-switch-6" type="checkbox">
                                                                        <span class="lbl"></span><br>
                                                                        </label>

                                                                        </label>



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



