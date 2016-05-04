<?php
include 'admin_header.php';

$name = $pass = $mail = $a_crt = $a_chg = $a_cons = "";

if(isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = "admin";
}

$result = getAdminByName($name);

if($result) {
    $mail = $result['email'];
    $a_crt = $result['autho_create'];
    $a_chg = $result['autho_change'];
    $a_cons = $result['autho_cons'];
}

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
								

						<!-- /section:settings.box -->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<!-- #section:pages/error -->
								<div class="alert alert-success center">
									
										<h1 class="grey lighter smaller">
											<span class="black bigger-125">
												<i class="ace-icon fa fa-check-circle"></i>
												Tamamdır! 
											</span>
											Yeni Admin Kaydedildi
										</h1>

                                                                                <div class='grey'>
                                                                                    <hr>
										<h3 class="lighter smaller">Admin Veritabanına eklendi</h3>
                                                                                <p><b>Kullanıcı Adı:</b> <?php echo $name ?></p>
                                                                                <p><b>E-Mail:</b> <?php echo $mail ?></p>
                                                                                <p><b>YETKİLER</b></p>
                                                                                <p><b>Admin Düzenleme Yetkisi:</b> <?php if($a_crt == 1){ echo "VAR <i class='ace-icon fa fa-check'></i>";} else {echo "YOK <i class='ace-icon fa fa-remove'></i>";} ?></p>
                                                                                <p><b>Onaylama Yetkisi:</b> <?php if($a_cons == 1){ echo "VAR <i class='ace-icon fa fa-check'></i>";} else {echo "YOK <i class='ace-icon fa fa-remove'></i>";} ?></p>
                                                                                <p><b>Kayıt Düzenleme Yetkisi:</b> <?php if($a_chg == 1){ echo "VAR <i class='ace-icon fa fa-check'></i>";} else {echo "YOK <i class='ace-icon fa fa-remove'></i>";} ?></p>
                                                                                <hr>
										</div>
										<div class="space"></div>

										<div class="center">
											<a href="javascript:history.back()" class="btn btn-grey">
												<i class="ace-icon fa fa-arrow-left"></i>
												Go Back
											</a>
										</div>
									
								</div>

								<!-- /section:pages/error -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
        </div>
    </div>
</div>




</div>
</body>



