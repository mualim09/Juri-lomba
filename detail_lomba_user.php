<?php include('admin/koneksi.php');
$id_user = $_SESSION['id_user'];
  $id = $_GET['id']; // id_lomba
// var_dump($id_user);
// DIE;
$ket_upload = "Upload Foto Anda";

$foto_karya = "SELECT * FROM lomba_detail WHERE id_lomba = $id AND id_peserta = $id_user";
$query_karya = mysqli_query($link,$foto_karya);
$fetch_karya = mysqli_fetch_array($query_karya);

// var_dump($fetch_karya);
// die;

$id_lomba = $fetch_karya['id_lomba'];
$lomba = mysqli_query($link,"SELECT * FROM lomba WHERE id_lomba = $id_lomba");
$datalomba = mysqli_fetch_assoc($lomba);

$tgl_sekarang = strtotime(date('y-m-d')); // sekarang
// $tgl_sekarang = strtotime('2019-08-06'); // asumsi


$tgl_akhir = strtotime($datalomba['tgl_selesai']);

if ($tgl_sekarang < $tgl_akhir) {
  if (!empty($fetch_karya['foto_lomba'] )) {
  $ket_upload = "Berhasil Upload";
  }
  if ($fetch_karya['id_status'] < 3) {
  $ket_upload = "Pendaftaran Anda Belum Diverifikasi";
  }
}
else{
  $ket_upload = "Tanggal Upload Sudah Berakhir";
}




 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>KFI REG D.I.Yogyakarta</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->
        <div class="top_bar">
                    <div class="top_bar_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                        <ul class="top_bar_contact_list">
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <div>0852 4263 3355</div>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                <div>kfijogja@gmail.com</div>
                                            </li>
                                        </ul>

                                        <?php
                                          if(empty($_SESSION['id_user'])){
                                                ?>
                                            <ul class="top_bar_contact_list ml-auto">
                                                <li>
                                                    <div><a href="daftar.php"> Register </a></div>
                                                </li>
                                                <li>
                                                    <div><a href="login.php"> Login</a></div>
                                                </li>
                                            </ul>
                                            <?php
                                            }
                                          else{
                                            ?>
                                            <ul class="top_bar_contact_list ml-auto">
                                                <li>
                                                    <div><?php echo   $_SESSION['nama'] ?></div>
                                                </li>
                                              </ul>
                                            <?php
                                          }

                                         ?>

                                        <!-- <div class="top_bar_login ml-auto">
                                            <div class="login_button">
                                              <a href="daftar.php"> Register </a>
                                              or
                                              <a href="login.php"> Login</a></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Header Content -->
        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo_container">
                                <a href="#">
                                    <img width="30%" src="images/kfi_jogja.png" alt="">
                                    <div class="logo_text">KFI<span>REG DIY</span></div>
                                </a>
                            </div>
                            <nav class="main_nav_contaner ml-auto">
                                <ul class="main_nav">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="lomba.php">Lomba</a></li>
                                    <?php
                                        if(!empty($_SESSION['id_user'])){
                                    ?>
                                        <li><a href="profil.php">Profil</a></li>
                                    <?php
                                        }
                                    ?>
                                    <li><a href="about.php">About</a></li>
                                </ul>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Search Panel -->
        <div class="header_search_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                            <form action="#" class="header_search_form">
                                <input type="search" class="search_input" placeholder="Search" required="required">
                                <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="home.php">Home</a></li>
                <li class="menu_mm"><a href="lomba.php">Lomba</a></li>
                <li class="menu_mm"><a href="profil.php">Profil</a></li>
                <li class="menu_mm"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>

<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Detail Lomba</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Course -->

<div class="course">
    <div class="container">
        <div class="row">

            <!-- Course -->
            <div class="col-lg-8">
                <?php

                $sql = "select * from lomba where id_lomba = '$id'";
                $query = mysqli_query($link, $sql);
                $data = mysqli_fetch_array($query);
                ?>
                <div class="course_container">
                    <div class="course_title"><?php echo $data['judul']; ?></div>

                    <!-- Course Image -->
                    <div class="course_image"><img src="admin/upload/<?php echo $data['foto']; ?>" alt=""></div>

                    <!-- Course Tabs -->
                    <div class="course_tabs_container">
                            <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                <div class="tab active">Deskripsi</div>
                            </div>
                            <div class="tab_panels">

                                <!-- Description -->
                                <div class="tab_panel active">
                                    <div class="tab_panel_title">Syarat & Ketentuan</div>
                                    <div class="tab_panel_content">
                                        <div class="tab_panel_text">
                                            <p>
                                                <?php echo $data['deskripsi'];?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <!-- Course Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">



                    <!-- Feature -->
                    <div class="sidebar_section">
                        <h3><?= $ket_upload ?></h3>
                        <div class="sidebar_feature">
                            <!-- <div class="course_price">Rp. <?php //echo $data['biaya_lomba']; ?></div> -->

                            <!-- Features -->
                            <div class="feature_list">

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Tanggal Pendaftaran:</span></div>
                                    <div class="feature_text ml-auto"><?php echo $data['tgl_daftar']; ?></div>
                                </div>
                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Tanggal Mulai:</span></div>
                                    <div class="feature_text ml-auto"><?php echo $data['tgl_mulai']; ?></div>
                                </div>

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Tanggal Selesai:</span></div>
                                    <div class="feature_text ml-auto"><?php echo $data['tgl_selesai']; ?></div>
                                </div>

                                <?php
                                if($tgl_sekarang < $tgl_akhir){


                                if ($fetch_karya['id_status'] < 3 ) {

                                }else{

                                if (empty($fetch_karya['foto_lomba'] )) {
                                ?>
                                <form method="post" action="upload_karya.php" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="foto" required>
                                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Upload Foto Karya</button>
                                </div>
                                <!-- /.box-footer -->
                                </form>
                                <?php
                                 }
                                else{
                                ?>
                                <a href="hasil.php?id_lomba=<?= $id  ?>" class="btn btn-primary"> Lihat Hasil  </a>
                                <?php
                                }
                                }
                              }

                                ?>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>
