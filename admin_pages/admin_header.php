<!DOCTYPE html>

<?php
include 'data_handler_admin.php';


session_start();
$autho['create'] = 0;
$autho['change'] = 0;
$autho['cons'] = 0;

$name = $_SESSION['user'];
$pass = $_SESSION['pass'];
$entry = $_SESSION['entry'];

$result = checkSessionAdmin($name, $pass, $entry);

if (!$result) {
    session_destroy();
    header("location:admin_index.php");
}

$zeroST = getStatus(0);
$okST = getStatus(1);
$noST = getStatus(2);
$totalRG = 0;
$totalRG = $zeroST + $okST + $noST;

$result2 = getAutho($name);


if($result) {
    $autho['create'] = intval($result2['crt']);
    $autho['change'] = intval($result2['chg']);
    $autho['cons'] = intval($result2['cons']);
    
}


function setLink($code, $value){
    if($code == "CRT") {
        if($value == 0) {
            echo 'admin_header.php';
        } else {
            echo 'new_admin.php';
        }  
    }
    
//    if($code == "CHG") {
//        if($value == 0) {
//            echo 'admin_header.php';
//        } else {
//            echo 'change_registry.php';
//        }  
//    }
    
//    if($code == "CONS") {
//        if($value == 0) {
//            echo 'admin_header.php';
//        } else {
//            echo 'considire.php';
//        }  
//    }
    
}


function setClassAutho ($value) {
    if($value == 0){
        echo 'display: none;';
    } else {
        echo '';
    }
}

$root = $_SERVER['PHP_SELF'];

if($root == "/yosProje/admin_pages/admin_change.php" || 
   $root == "/yosProje/admin_pages/admin_creating_page.php" ||
   $root == "/yosProje/admin_pages/admin_remove.php" ||
   $root == "/yosProje/admin_pages/admins.php" ||
   $root == "/yosProje/admin_pages/change_admin_action.php" ||
   $root == "/yosProje/admin_pages/create_admin.php") {
    
    
    if($autho['create'] == 0){
        header("location:admin_main.php");
    }
    
    
    
    
   }
    

?>





<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
    <title>RTEU YOS - ADMIN</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/ace-fonts.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
            <link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
    <![endif]-->

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="../assets/css/ace-ie.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.js"></script>
    <![endif]-->
</head>

<body class="no-skin">
    <!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container" id="navbar-container">
        <!-- #section:basics/sidebar.mobile.toggle -->
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <!-- /section:basics/sidebar.mobile.toggle -->
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="admin_main.php" class="navbar-brand">
                <small>
                    <i class="fa fa-gear"></i>
                    RTEU YOS - Admin Sayfası
                </small>
            </a>

            <!-- /section:basics/navbar.layout.brand -->

            <!-- #section:basics/navbar.toggle -->

            <!-- /section:basics/navbar.toggle -->
        </div>

        <!-- #section:basics/navbar.dropdown -->
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="red">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span class="badge badge-important"><?php echo $zeroST; ?></span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar navbar-red dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-exclamation-triangle"></i>
                            <?php echo $totalRG; ?> Adet Kayıt
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar navbar-pink">

                                <li>
                                    <a href="registry_tables.php">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-grey fa fa-anchor"></i>
                                                Bekleyen Kayıt
                                            </span>
                                            <span class="pull-right badge badge-info"><?php echo $zeroST; ?> adet</span>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="registry_tables.php">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-green fa fa-pencil"></i>
                                                Onaylanmış Kayıt
                                            </span>
                                            <span class="pull-right badge badge-info"><?php echo $okST; ?> adet</span>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="registry_tables.php">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-pink fa fa-eraser "></i>
                                                Reddedilmiş Kayıt
                                            </span>
                                            <span class="pull-right badge badge-info"><?php echo $noST; ?> adet</span>
                                        </div>
                                    </a>
                                </li>
                                
<!--                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-pink fa fa-pencil"></i>
                                                Yeni Kayıtlar
                                            </span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>-->




                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="registry_tables.php">
                                Tüm Kayıtları Gör
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>



<!--                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-exclamation-triangle"></i>
                            8 Yeni Haber
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar navbar-pink">

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                Yeni Kayıtlar
                                            </span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-xs btn-primary fa fa-user"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
                                                New Orders
                                            </span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
                                                Followers
                                            </span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                Tüm Haberleri Gör
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>-->



                <!-- #section:basics/navbar.user_menu -->
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
<!--                        <img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />-->
                        <span class="user-info col-lg-12">
                            <?php echo $name;?>
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="settings.php">
                                <i class="ace-icon fa fa-cog"></i>
                                Ayarlar
                            </a>
                        </li>

                        <li style="<?php setClassAutho($autho['create'])?>">
                            <a href="admins.php">
                                <i class="ace-icon fa fa-user"></i>
                                Admin Düzenleme
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="logout.php">
                                <i class="ace-icon fa fa-power-off"></i>
                                Çıkış
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- /section:basics/navbar.user_menu -->
            </ul>
        </div>

        <!-- /section:basics/navbar.dropdown -->
    </div><!-- /.navbar-container -->
</div>

<!-- /section:basics/navbar.layout -->


<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement)
        document.write("<script src='../assets/js/jquery.mobile.custom.js'>" + "<" + "/script>");
</script>
<script src="assets/js/bootstrap.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="assets/js/ace/elements.scroller.js"></script>
<script src="assets/js/ace/elements.colorpicker.js"></script>
<script src="assets/js/ace/elements.fileinput.js"></script>
<script src="assets/js/ace/elements.typeahead.js"></script>
<script src="assets/js/ace/elements.wysiwyg.js"></script>
<script src="assets/js/ace/elements.spinner.js"></script>
<script src="assets/js/ace/elements.treeview.js"></script>
<script src="assets/js/ace/elements.wizard.js"></script>
<script src="assets/js/ace/elements.aside.js"></script>
<script src="assets/js/ace/ace.js"></script>
<script src="assets/js/ace/ace.ajax-content.js"></script>
<script src="assets/js/ace/ace.touch-drag.js"></script>
<script src="assets/js/ace/ace.sidebar.js"></script>
<script src="assets/js/ace/ace.sidebar-scroll-1.js"></script>
<script src="assets/js/ace/ace.submenu-hover.js"></script>
<script src="assets/js/ace/ace.widget-box.js"></script>
<script src="assets/js/ace/ace.settings.js"></script>
<script src="assets/js/ace/ace.settings-rtl.js"></script>
<script src="assets/js/ace/ace.settings-skin.js"></script>
<script src="assets/js/ace/ace.widget-on-reload.js"></script>
<script src="assets/js/ace/ace.searchbox-autocomplete.js"></script>

<!-- inline scripts related to this page -->

<!-- the following scripts are used in demo only for onpage help and you don't need them -->