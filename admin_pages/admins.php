<?php
include 'admin_header.php';

$result = getAllAdmins();
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

                <div class="page-header">
                    <h1>
                        Kayıtlar
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Kaydı görüntülemek için yanındaki büyüteç ikonuna tıklayın
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                </div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>                     
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>ID</th>
                            <th>Kullanıcı Adı</th>
                            <th>E-mail</th>
                            <th>Admin Düzenleme Yetkisi</th>
                            <th>Kayıt Onaylama Yetkisi</th>
                            <th>Kayıt Düzenleme Yetkisi</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        while ($row = mysqli_fetch_array($result)) {

                            $id = $row['id'];
                            $name = $row['username'];
                            $email = $row['email'];
                            $a_crt = $row['autho_create'];
                            $a_chg = $row['autho_change'];
                            $a_cons = $row['autho_cons'];


                            echo "<tr>
                <td class='center'>
                    <label class='pos-rel'>
                        <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                    </label>
                </td>
                <td>
                    $id
                </td>
                <td>$name</td>
                <td class='hidden-480'>$email</td>";

                            if ($a_crt == 1) {
                                echo "<td class='hidden-480'>
                                <i class='ace-icon fa fa-check'></i>
                                </td>";
                            } else {
                                echo "<td class='hidden-480'>
                                <i class='ace-icon fa fa-remove'></i>
                                </td>";
                            }
                            
                            if ($a_chg == 1) {
                                echo "<td class='hidden-480'>
                                <i class='ace-icon fa fa-check'></i>
                                </td>";
                            } else {
                                echo "<td class='hidden-480'>
                                <i class='ace-icon fa fa-remove'></i>
                                </td>";
                            }
                            
                            if ($a_cons == 1) {
                                echo "<td class='hidden-480'>
                                <i class='ace-icon fa fa-check'></i>
                                </td>";
                            } else {
                                echo "<td class='hidden-480'>
                                <i class='ace-icon fa fa-remove'></i>
                                </td>";
                            }

                            echo "<td>
                <div class='hidden-sm hidden-xs action-buttons'>
                <a class='red' href='admin_remove.php?id=$id'>
                <i class='ace-icon fa fa-remove bigger-130'></i>
                </a>
                <a class='blue' href='admin_change.php?id=$id'>
                <i class='ace-icon fa fa-search bigger-130'></i>
                </a>                


                </div>
                



                </td>
                </tr>";
                        }
                        ?>



                    </tbody>
                </table>

                
            <div class="row">
                            
                            <div class="col-sm-5"></div>

                            <a href="admin_creating_page.php" class="btn btn-default btn-info">
                                <i class="ace-icon fa fa-plus-circle"></i> Yeni Admin
                            </a>



            </div>    
                
             
            </div>
        </div>
    </div>
</div>




</div>
</body>



