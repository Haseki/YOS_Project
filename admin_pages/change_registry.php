<?php
include 'admin_header.php';
include './countries.php';
//include 'admin_submenu.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];
}


$result = getRegistryID($id);

if ($result) {

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

$genderPri = "";

if ($gender == "M" || $gender == "m") {
    $genderPri = "Bay";
} else {
    $genderPri = "Bayan";
}

$statusHTML = "Bilinmiyor";


if ($status == 0) {
    $statusHTML = "<span class='label label-sm label-warning'>Onaylanmadı</span>";
} else if ($status == 1) {
    $statusHTML = "<span class='label label-sm label-success'>Onaylandı</span>";
} else if ($status == 2) {
    $statusHTML = "<span class='label label-sm label-danger'>Reddedildi</span>";
} else if ($status == 3) {
    $statusHTML = "<span class='label label-sm label-info'>Değiştirildi</span>";
}

$cons_button = "";

if ($autho['cons'] == 0) {
    $cons_button = "display: none;";
}

$change_button = "";

if ($autho['change'] == 0) {
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
                                        <b>ID - <?php echo $id; ?></b>
                                    </div>
                                    </th>

                                    </tr>

                                    <tr>

                                        <th class="row center" colspan="4"><img style="width:200px; height: 200px;" src="<?php echo $photo; ?>"></img></th>
                                    </tr>



                                    </thead>

                                    <tbody>
                                    <form method="POST" action="update_reg.php">
                                        <tr>
                                            <td class="center" colspan="4"><b>Ödeme Bilgisi</b></td>
                                        </tr>
                                        <input type="hidden" name="post-id" value="<?php echo $id;?>"></input>
                                        <tr>
                                            <td class="center" colspan="2">Dekont Tarihi</td>
                                            <td colspan="2"><input type="text"  name="post-receipt" id="receipt-field" placeholder="Dekont Tarihi" value="<?php echo $receipt_date; ?>" class="col-xs-10 col-sm-5"></input></td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="4"><b>Kişisel Bilgiler</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Pasaport No</b></td>
                                            <td> <input type="text"  name="post-passport" id="pass-field" placeholder="Pasaport" value="<?php echo $passport; ?>" class="col-xs-10 col-sm-5"></input></td>
                                        <td class="center" ><b>Kimlik No</b></td>
                                        <td> <input type="text"  name="post-tcno" id="tcno-field" placeholder="Kimlik No" value="<?php echo $tc_no; ?>" class="col-xs-10 col-sm-10"></input></td>
                                        </tr>
                                        <tr>
                                            <td class="center"><b>Ad - Soyad</b></td>
                                            <td> <input type="text"  name="post-name" id="name-field" placeholder="Ad" value="<?php echo $name; ?>" class="col-xs-10 col-sm-5"></input> 
                                        <input type="text"  name="post-surname" id="surname-field" placeholder="Soyad" value="<?php echo $surname; ?>" class="col-xs-10 col-sm-5"></input>
                                        </td>
                                        <td class="center"><b>Cinsiyet</b></td>
                                        <td> 
                                        <input type="radio"  name="post-gender" id="female-field" value="F" <?php
                                        if ($gender == "F" || $gender == "f") {
                                            echo "checked";
                                        }
                                        ?> class="col-xs-6 col-sm-3">BAYAN<br></input>
                                        <input type="radio"  name="post-gender" id="male-field" value="M" <?php
                                        if ($gender == "M" || $gender == "m") {
                                            echo "checked";
                                        }
                                        ?> class="col-xs-6 col-sm-3">BAY</input>                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="center"><b>Anne Adı</b></td>
                                            <td> <input type="text"  name="post-mother" id="mother-name" placeholder="Anne Adı" value="<?php echo $m_name; ?>" class="col-xs-10 col-sm-5"></input> </td>
                                        <td class="center"><b>Baba Adı</b></td>
                                        <td> <input type="text"  name="post-father" id="father-name" placeholder="Baba Adı" value="<?php echo $f_name; ?>" class="col-xs-10 col-sm-10"></input> </td>
                                        </tr>
                                        <tr>
                                            <td class="center"><b>Doğum Yeri</b></td>
                                            <td> <input type="text"  name="post-birth-place" id="birth-place" placeholder="Doğum Yeri" value="<?php echo $birth_plc; ?>" class="col-xs-10 col-sm-5"></input> </td>
                                        <td class="center"><b>Doğum Tarihi</b></td>
                                        <td> <input type="text"  name="post-birth-date" id="birth-date" placeholder="Doğum Tarihi" value="<?php echo $birth_date; ?>" class="col-xs-10 col-sm-10"></input> </td>
                                        </tr>
                                        <tr>
                                            <td class="center" colspan="2"><b>Ülke</b></td>
                                            <td colspan="2"> 
                                                <select id="nation" name="post-nation" class="form-control">
                                                   <?php writeCountry($nation);  ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="4"><b>Lise Bilgileri</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Lisenin Adı</b></td>
                                            <td><input type="text"  name="post-high-name" id="hs-name" placeholder="Lisenin Adı" value="<?php echo $hs_name; ?>" class="col-xs-10 col-sm-5"></input></td>
                                        <td class="center"><b>Lisenin Bulunduğu Şehir</b></td>
                                        <td><input type="text"  name="post-high-city" id="hs-country" placeholder="Lisenin Şehri" value="<?php echo $hs_country; ?>" class="col-xs-10 col-sm-10"></input></td>
                                        </tr>
                                        <tr>
                                            <td class="center"><b>Mezuniyet yılı</b></td>
                                            <td> <input type="text"  name="post-gradu-date" id="gradudate" placeholder="Mezuniyet Yılı" value="<?php echo $gradu_date; ?>" class="col-xs-10 col-sm-5"></input> </td>
                                        <td class="center"><b>Toplam Eğitim süresi</b></td>
                                        <td> <input type="text"  name="post-period" id="period" placeholder="Toplam Yıl" value="<?php echo $period; ?>" class="col-xs-10 col-sm-10"></input> </td>
                                        </tr>
                                        <tr>
                                            <td class="center"><b>Diploma Notu</b></td>
                                            <td> <input type="text"  name="post-grade" id="dip-grade" placeholder="Diploma Notu" value="<?php echo $dip_grade; ?>" class="col-xs-10 col-sm-5"></input></td>
                                        <td class="center"><b>D. Not Sistemi</b></td>
                                        <td> <input type="text"  name="post-grade-system" id="grade-system" placeholder="Not Sistemi" value="<?php echo $grade_system; ?>" class="col-xs-10 col-sm-10"></input> </td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="4"><b>Adres Bilgileri</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Ülke</b></td>
                                            <td> 
                                                <select id="country" name="post-country" class="form-control">
                                                    <?php writeCountry($country);  ?>
                                                </select>
                                            </td>
                                            <td class="center"><b>Şehir</b></td>
                                            <td> <input type="text"  name="post-city" id="city" placeholder="Şehir" value="<?php echo $city; ?>" class="col-xs-10 col-sm-10"></input> </td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Adres</b></td>
                                            <td colspan="3"> <input type="text"  name="post-adress" id="adress" placeholder="Adres" value="<?php echo $adres; ?>" class="col-xs-10 col-sm-12"></input> </td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="4"><b>İletişim Bilgileri</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Telefon</b></td>
                                            <td><input type="text"  name="post-phone" id="phone" placeholder="xxx - xxx xx xx" value="<?php echo $tel; ?>" class="col-xs-10 col-sm-5"></input></td>
                                        <td class="center"><b>E-Mail</b></td>
                                        <td> <input type="text"  name="post-mail" id="mail" placeholder="xxx@xxx.xxx" value="<?php echo $mail; ?>" class="col-xs-10 col-sm-10"></input></td>
                                        </tr>

                                        <tr>
                                            <td class="center" colspan="4"><b>Sistem Bilgileri</b></td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Başvuru Tarihi</b></td>
                                            <td> <?php echo $time; ?> </td>
                                            <td class="center"><b>IP</b></td>
                                            <td> <?php echo $ip; ?> </td>
                                        </tr>

                                        <tr>
                                            <td class="center"><b>Şifre</b></td>
                                            <td> <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle">
                                                <?php echo $code; ?>
                                                <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                            </button>

                                            <ul class="dropdown-menu dropdown-warning">
                                                <li>
                                                    <a href="new_code.php?id=<?php echo $id;?>">Yeni Kod Oluştur</a>
                                                </li>
                                                <li>
                                                    <a href="#">Kodu Gönder</a>
                                                </li>
                                            </ul>
                                        </div>


                                        </td>
                                        <td class="center"><b>Başvuru Durumu</b></td>
                                        <td> <?php echo $statusHTML; ?> </td>
                                        </tr>

                                        <tr>
                                    
                                    </tbody>


                                </table>




                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">

                            <div class="col-sm-8"></div>

                            <a href="show_reg.php?id=<?php echo $id; ?>" class="btn btn-default btn-danger">
                                <i class="ace-icon fa fa-remove"></i> İptal
                            </a>

                            <input style ="<?php echo $change_button ?>" type="submit" name="submit" class="btn btn-default btn-success" value="Değiştir">
                                
                            </a>

</form>
                        </div>



                    </div>
                </div>
            </div></div></div></div>




</div>
</body>



