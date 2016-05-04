<?php
include 'admin_header.php';

$error = 0;

if(isset($_GET['error'])){
    
    $error = $_GET['error'];
    
}
function writeContent($error) {
    if ($error == 1 || $error == 0) {
        
        echo "                                                  <div class='alert alert-danger center'>
									
										<h1 class='grey lighter smaller'>
											<span class='black bigger-125'>
												<i class='ace-icon fa fa-remove'></i>
												Maalesef! 
											</span>
											Yeni Admin Kaydedilemedi
										</h1>

                                                                                <div class='grey'>
                                                                                    <hr>
										<h3 class='lighter smaller'>Admin Veritabanına eklenemedi</h3>
                                                                                <h3 class='lighter smaller'>Girilen veriler eksik ya da hatalı</h3>
                                                                                <hr>
										</div>
										<div class='space'></div>

										<div class='center'>
											<a href='javascript:history.back()' class='btn btn-grey'>
												<i class='ace-icon fa fa-arrow-left'></i>
												Go Back
											</a>
										</div>
									
								</div>";
        
        
    } else if ($error == 2) {
        
        echo "                                                  <div class='alert alert-danger center'>
									
										<h1 class='grey lighter smaller'>
											<span class='black bigger-125'>
												<i class='ace-icon fa fa-remove'></i>
												Maalesef! 
											</span>
											Yeni Admin Kaydedilemedi
										</h1>

                                                                                <div class='grey'>
                                                                                    <hr>
										<h3 class='lighter smaller'>Admin Veritabanına eklenemedi</h3>
                                                                                <h3 class='lighter smaller'>Aynı isimde Admin zaten mevcut</h3>
                                                                                <hr>
										</div>
										<div class='space'></div>

										<div class='center'>
											<a href='javascript:history.back()' class='btn btn-grey'>
												<i class='ace-icon fa fa-arrow-left'></i>
												Go Back
											</a>
										</div>
									
								</div>";
        
        
    } else {
        writeContent(0);
    }
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
								
                                                                 <?php writeContent($error)?>
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



