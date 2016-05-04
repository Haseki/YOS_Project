<?php
include 'admin_header.php';
//include 'admin_submenu.php';

if(isset($_GET['id'])) {

    $id = $_GET['id']; 

}


$result = getRegistryID($id);

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

$photo = $result['photo_dir'];
  
} else {
    echo 'Böyle bir kayıt yok görünüyor <br>';
}

$genderPri ="";

if($gender == "M" || $gender == "m") {
    $genderPri = "Bay";
} else {
    $genderPri = "Bayan";
}

$statusHTML = "Bilinmiyor";


if($status == 0) {
   $statusHTML ="<span class='label label-sm label-warning'>Onaylanmadı</span>"; 
} else if ($status == 1) {
   $statusHTML ="<span class='label label-sm label-success'>Onaylandı</span>";
} else if ($status == 2) {
   $statusHTML ="<span class='label label-sm label-danger'>Reddedildi</span>";
} else if ($status == 3) {
   $statusHTML ="<span class='label label-sm label-info'>Değiştirildi</span>";
}

$cons_button = "";

if($autho['cons'] == 0) {
$cons_button = "display: none;";    
}

$change_button = "";

if($autho['change'] == 0) {
$change_button = "display: none;";    
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

                <div class="widget-body">
                    <div class="widget-main padding-28">
                        <div class="row ">
                            <div class=" center col-sm-10">

<!--                            <div class="img col-sm-5"><img src="../registry_pages/images/rte-icon.png"></img></div>-->
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="4">
                                    <div class="row center">
                                        <b>ID - <?php echo $id;?></b>
                                    </div>
                                    </th>

                                    </tr>

                                    <tr>

                                        <th class="row center" colspan="4"><img style="width:200px; height: 200px;" src="<?php echo $photo;?>"></img></th>
                                    </tr>



                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="center" colspan="4"><b>Ödeme Bilgisi</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="2">Dekont Tarihi</td>
                                            <td colspan="2"> <?php echo $receipt_date;?> </td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="4"><b>Kişisel Bilgiler</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Pasaport No</b></td>
                                            <td> <?php echo $passport;?> </td>
                                            <td class="center" ><b>Kimlik No</b></td>
                                            <td> <?php echo $tc_no;?> </td>
                                        </tr>
                                        <tr>
                                            <td class="center"><b>Ad - Soyad</b></td>
                                            <td> <?php echo $name." ".$surname;?> </td>
                                            <td class="center"><b>Cinsiyet</b></td>
                                            <td> <?php echo $genderPri;?> </td>
                                        </tr> 
                                        <tr>
                                            <td class="center"><b>Anne Adı</b></td>
                                            <td> <?php echo $m_name;?> </td>
                                            <td class="center"><b>Baba Adı</b></td>
                                            <td> <?php echo $f_name;?> </td>
                                        </tr>
                                        <tr>
                                            <td class="center"><b>Doğum Yeri</b></td>
                                            <td> <?php echo $birth_plc;?> </td>
                                            <td class="center"><b>Doğum Tarihi</b></td>
                                            <td> <?php echo $birth_date;?> </td>
                                        </tr>
                                        <tr>
                                            <td class="center" colspan="2"><b>Ülke</b></td>
                                            <td colspan="2"> <?php echo $nation;?> </td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="4"><b>Lise Bilgileri</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Lisenin Adı</b></td>
                                            <td> <?php echo $hs_name;?> </td>
                                            <td class="center"><b>Lisenin Bulunduğu Şehir</b></td>
                                            <td> <?php echo $hs_country;?></td>
                                        </tr>
                                        <tr>
                                            <td class="center"><b>Mezuniyet yılı</b></td>
                                            <td> <?php echo $gradu_date;?> </td>
                                            <td class="center"><b>Toplam Eğitim süresi</b></td>
                                            <td> <?php echo $period;?> </td>
                                        </tr>
                                        <tr>
                                            <td class="center"><b>Diploma Notu</b></td>
                                            <td> <?php echo $dip_grade;?> </td>
                                            <td class="center"><b>D. Not Sistemi</b></td>
                                            <td> <?php echo $grade_system;?> </td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="4"><b>Adres Bilgileri</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Ülke</b></td>
                                            <td> <?php echo $country;?> </td>
                                            <td class="center"><b>Şehir</b></td>
                                            <td> <?php echo $city;?> </td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Adres</b></td>
                                            <td colspan="3"> <?php echo $adres;?> </td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="4"><b>İletişim Bilgileri</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Telefon</b></td>
                                            <td> <?php echo $tel;?></td>
                                            <td class="center"><b>E-Mail</b></td>
                                            <td> <?php echo $mail;?></td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="4"><b>Sistem Bilgileri</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Başvuru Tarihi</b></td>
                                            <td> <?php echo $time;?> </td>
                                            <td class="center"><b>IP</b></td>
                                            <td> <?php echo $ip;?> </td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Şifre</b></td>
                                            <td> <?php echo $code;?> </td>
                                            <td class="center"><b>Başvuru Durumu</b></td>
                                            <td> <?php echo $statusHTML;?> </td>
                                        </tr>

                                        <tr>
                                    </tbody>


                                </table>




                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            
                            <div class="col-sm-5"></div>

                            <a style ="<?php echo $change_button?>" href="change_registry.php?id=<?php echo $id;?>" class="btn btn-default btn-info">
                                <i class="ace-icon fa fa-pencil"></i> Değiştir
                            </a>
                            
                            <a style ="<?php echo $cons_button?>" href="cons_reg.php?id=<?php echo $id?>&btn=freeze" class="btn btn-default btn-warning">
                                <i class="ace-icon fa fa-anchor"></i> Askıya Al
                            </a>

                            <a style ="<?php echo $cons_button?>" href="cons_reg.php?id=<?php echo $id?>&btn=cancel" class="btn btn-default btn-danger">
                                <i class="ace-icon fa fa-remove"></i> Reddet
                            </a>
                            
                            <a style ="<?php echo $cons_button?>" href="cons_reg.php?id=<?php echo $id?>&btn=okey" class="btn btn-default btn-success">
                                <i class="ace-icon fa fa-check"></i> Onayla
                            </a>


                        </div>



                    </div>
                </div>
            </div></div></div></div>




</div>
</body>



