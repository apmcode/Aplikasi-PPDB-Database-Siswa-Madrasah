<?php
require "config/database.php";
require "config/function.php";
require "config/functions.crud.php";
require "login_mjb/versi.php";
$tahun1 = date('Y');
$tahun2 = date('Y') + 1;
$buka  = new DateTime($setting['tgl_pengumuman']); //awal Buka
$tutup  = new DateTime($setting['tgl_tutup']); //awal Buka
$hariini = new DateTime(); // Waktu sekarang atau akhir
$diff  = $hariini->diff($buka);
$tgl_buka = $setting['tgl_pengumuman'];
$tgl_tutup = $setting['tgl_tutup'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KELAS KHUSUS | <?= $setting['nama_sekolah'] ?></title>

  <link rel="shortcut icon" href="<?= $setting['logo'] ?>" type="image/png">
  <meta content="bootstrap" name="ppdb">
  <meta content="ppdb" name="ppdb">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="tema/assets/js/aos.css" rel="stylesheet">
  <link href="tema/assets/js/bootstrap-icons.css" rel="stylesheet">
  <link href="tema/style3.css" rel="stylesheet">

</head>

<!--<a href="https://api.whatsapp.com/send?phone=6285876806448&text=<?= $setting['klikchat'] ?><?= $setting['nama_sekolah'] ?>">-->
    
<a href="https://drive.google.com/file/d/1ZRRj5JsNKa_ux_LC3gpzkkobe4tVnwIB/view?usp=share_link">    
    
<img src="https://hantamo.com/free/whatsapp.svg" class="wabutton" alt="WhatsApp-Button"> 

</a>
<style>
.wabutton{
width:50px;
height:50px;
position:fixed;
bottom:20px;
left:10px;
z-index:100;
}
</style>


<body>


  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><?= $setting['nama_sekolah'] ?></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <!--<li><a class="nav-link scrollto" href="#about">Tentang</a></li>-->
          <li><a class="nav-link scrollto" href="#details">Syarat</a></li>
           <li><a class="nav-link scrollto" href="#about">Fasilitas</a></li> 
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto" href="https://mtsmuh07purbalingga.sch.id/madrasah/berita">Gallery</a></li>
          <li><a class="nav-link scrollto " href="cek_pendaftaran"><span class="bi bi-search">  Cek Pendaftaran</span></a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <?php if ($hariini <= $buka) { ?>
    <section id="hero">

      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
            <div data-aos="zoom-out">
              <h1>Selamat di Pangkalan Data Terpadu MTS MUJUBANGGA (PADAMUJUA)
                <span></span>
              </h1>
               <h2><?= $setting['nama_sekolah'] ?></h2> 
              <div class="text-center text-lg-start">
                <span>
                  <a href="" class="btn btn-warning" style="margin: 5px; border-radius: 50px;">
                    <i class="bi bi-door-open"></i> &nbsp;
                    <b>Pendaftaran Kelas KHUSUS akan dibuka tanggal <?php echo tgl_indo("$tgl_buka"); ?></b></a><br>
                    <a href="" class="btn btn-success" style="margin: 5px; border-radius: 50px;">
                    <i class="bi bi-book"></i> &nbsp;
                    <b>Pendaftaran Kelas Reguler (biasa) akan dibuka tanggal 01 MARET 2023</b>
                  </a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
            <a class="nav-link scrollto" href="#about"> <img src="tema/assets/images/4.png" class="img-fluid animated" alt="" ></a>
          </div>
          <div class="col-lg-3 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
            <a class="nav-link scrollto" href="#details"> <img src="tema/assets/images/5.png" class="img-fluid animated" alt="" ></a>
          </div>
          
        </div>
      </div>
    <?php } ?>
    <?php if ($hariini >= $tutup) { ?>

      <!-- kondisi sudah tutup -->
      <section id="hero">

        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
              <div data-aos="zoom-out">
                <h1>Selamat di Pangkalan Data Terpadu MTS MUJUBANGGA (PADAMUJUA)
                <span></span>
              </h1>
                <!-- <h2>Solusi Masalah Teknologi anda</h2> -->
                <div class="text-center text-lg-start">
                  <span>
                    <a href="" class="btn btn-danger" style="margin: 5px; border-radius: 50px;">
                      <i class="bi bi-x-circle-fill"></i> &nbsp;
                      <b>PENDAFTARAN SUDAH DI TUTUP PADA TANGGAL <?php echo tgl_indo("$tgl_tutup"); ?></b></a>
                    <br>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
              <img src="tema/assets/images/5.png" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>

      <?php } else { ?>

        <?php if ($hariini >= $buka) { ?>

          <!-- kondisi sudah buka -->
          <section id="hero">

            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                  <div data-aos="zoom-out">
                    <h1>Selamat di Pangkalan Data Terpadu MTS MUJUBANGGA (PADAMUJUA)
                <span></span>
              </h1>
                     <h2><?= $setting['nama_sekolah'] ?></h2> 
                    <div class="text-center text-lg-start">
                      <span>
                        <a href="daftar" class="btn btn-primary" style="margin: 5px; border-radius: 50px; color:white">
                          <i class="bi bi-list bi-pulse"></i> &nbsp;
                          <b>KLIK DAFTAR</b>
                        </a>
                        <a href="cek_pendaftaran" class="btn btn-warning" style="margin: 5px; border-radius: 50px;">
                          <i class="bi bi-door-open"></i> &nbsp;
                          <b>CEK PENDAFTARAN</b></a>
                        <br>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                  <img src="tema/assets/images/5.png" class="img-fluid animated" alt="">
                </div>
              </div>
            </div>

          <?php } ?>
        <?php } ?>


        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
          <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
          </defs>
          <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
          </g>
          <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
          </g>
          <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
          </g>
        </svg>

          </section>

          <main id="main">


            <section id="about" class="about">
              <div class="container-fluid">

                <div class="row">
                  <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                    <a href="https://youtu.be/XFsbUO_sUgM" target="_blank" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                  </div>

                  <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                    <!--<h3><?= $setting['nama_sekolah'] ?></h3>-->
                    <h3>SARPRAS</h3>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p> -->

 <div class="icon-box " data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon"><i class="bi bi-house"></i></div>
                     <div class="row mt-12">
                        <div class="col-sm-4">
                            <div class="card mt-2">
                                <div class="card-header bg-primary">
                                   <h2 class="text-center">
                                        <label>Kelas 7</label> </div></h2>
                                <div class="card-body">
                                    <h7 class="text-center">
                                        <label>Jumlah Siswa</label>
                                        <?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where kelas in (11,12,13,14,15)")) ?></h7>
                                </div>
                                 <div class="card-body">
                                    <h7 class="text-center">
                                        <label>Laki-Laki</label>
                                        <?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where jk = 'L' and kelas in (11,12,13,14,15)")) ?></h7>
                                </div>
                                
                                 <div class="card-body">
                                    <h7 class="text-center">
                                        <label>Perempuan</label>
                                        <?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where jk = 'P' and kelas in (11,12,13,14,15)")) ?></h7>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card mt-2">
                                <div class="card-header bg-warning">
                                   <h2 class="text-center">
                                        <label>Kelas 8</label> </div></h2>
                                <div class="card-body">
                                    <h7 class="text-center">
                                        <label>Jumlah Siswa</label>
                                        <?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where kelas in (6,7,8,9,10)")) ?></h7>
                                </div>
                                 <div class="card-body">
                                    <h7 class="text-center">
                                        <label>Laki-Laki</label>
                                        <?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where jk = 'L' and kelas in (6,7,8,9,10)")) ?></h7>
                                </div>
                                
                                 <div class="card-body">
                                    <h7 class="text-center">
                                        <label>Perempuan</label>
                                        <?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where jk = 'P' and kelas in (6,7,8,9,10)")) ?></h7>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card mt-2">
                                <div class="card-header bg-succes">
                                   <h2 class="text-center">
                                        <label>Kelas 9</label> </div></h2>
                                <div class="card-body">
                                    <h7 class="text-center">
                                        <label>Jumlah Siswa</label>
                                        <?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where kelas in (1,2,3,4,5)")) ?></h7>
                                </div>
                                 <div class="card-body">
                                    <h7 class="text-center">
                                        <label>Laki-Laki</label>
                                        <?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where jk = 'L' and kelas in (1,2,3,4,5)")) ?></h7>
                                </div>
                                
                                 <div class="card-body">
                                    <h7 class="text-center">
                                        <label>Perempuan</label>
                                        <?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where jk = 'P' and kelas in (1,2,3,4,5)")) ?></h7>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="card mt-2">
                                <div class="card-header bg-succes">
                                   <h7><class="text-center">
                                        <center><label>JUMLAH SISWA KESELURUHAN</label></center> </div></h7>
                                <div class="card-body">
                                    <h2 class="text-center">
                                        <center>
                                            <!--<label>TOTAL</label>-->
                                        <?= rowcount($koneksi, 'siswa', ['status' => 1]) ?></center></h2></h7>
                                </div>
                                 
                            </div>
                        </div>

                    </div>

                    </div>
<div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                     <div class="icon"><i class="bi bi-star"></i></div>
                      <h4 class="title "><a href="">KELAS FULL AC</a></h4>
                      <p class="description">Kelas Khusus Sains & Tahfidz <?= $setting['nama_sekolah'] ?> dilengkapi AC</p>
                    </div>



                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                      <div class="icon"><i class="bi bi-wifi"></i></div>
                      <h4 class="title"><a href="">KELAS FULL WIFI</a></h4>
                      <p class="description">Kelas Khusus Sains & Tahfidz <?= $setting['nama_sekolah'] ?> dilengkapi WIFI dengan kecepatan 50 mbps</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                      <div class="icon"><i class="bi bi-projector"></i></div>
                      <h4 class="title"><a href="">KELAS FULL PROYEKTOR</a></h4>
                      <p class="description">Kelas Khusus Sains & Tahfidz <?= $setting['nama_sekolah'] ?> dilengkapi LCD Proyektor untuk semua pembelajaran</p>
                    </div>

 <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                      <div class="icon"><i class="bi bi-tv"></i></div>
                      <h4 class="title"><a href="">KELAS FULL PENGGUNAAN LEPTOP & ANDROID</a></h4>
                      <p class="description">Kelas Khusus Sains & Tahfidz <?= $setting['nama_sekolah'] ?> dilengkapi dengan Leptop untuk pembelajaran</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                      <div class="icon"><i class="bi bi-trophy"></i></div>
                      <h4 class="title"><a href="">KELAS FULL PRESTASI</a></h4>
                      <p class="description">Kelas Khusus Sains & Tahfidz <?= $setting['nama_sekolah'] ?> dengan jam pelajaran lebih ekstra untuk menjadi juara</p>
                    </div>


                    <!--<div class="icon-box " data-aos="zoom-in" data-aos-delay="100">-->
                    <!--  <div class="icon"><i class="bi bi-star"></i></div>-->
                    <!--  <h4 class="title "><a href="">Akreditasi</a></h4>-->
                    <!--  <p class="description"><?= $setting['nama_sekolah'] ?> telah berhasil mendapatkan akreditasi A. Untuk itu kami terus berupaya untuk memberikan layanan pendidikan yang lebih baik lagi guna mendukung masa depan siswa</p>-->
                    <!--</div>-->

                    <!--<div class="icon-box" data-aos="zoom-in" data-aos-delay="200">-->
                    <!--  <div class="icon"><i class="bi bi-book"></i></div>-->
                    <!--  <h4 class="title"><a href="">Kurikulum</a></h4>-->
                    <!--  <p class="description">Kami menggunakan kurikulum terbaru yaitu Kurikulum 2013 yang meliputi aspek pengetahuan, aspek keterampilan, aspek sikap, dan perilaku dengan berlandaskan Al-Qur’an dan Sunnah</p>-->
                    <!--</div>-->

                    <!--<div class="icon-box" data-aos="zoom-in" data-aos-delay="300">-->
                    <!--  <div class="icon"><i class="bi bi-house-door"></i></div>-->
                    <!--  <h4 class="title"><a href="">Fasilitas</a></h4>-->
                    <!--  <p class="description">Berbagai macam fasilitas sekolah kami berikan kepada siswa-siswi sebagai penunjang update dan upgrade diri dalam lingkungan dan teknologi, untuk masa depan.</p>-->
                    <!--</div>-->

                    <!--<div class="icon-box" data-aos="zoom-in" data-aos-delay="300">-->
                    <!--  <div class="icon"><i class="bi bi-trophy"></i></div>-->
                    <!--  <h4 class="title"><a href="">Prestasi</a></h4>-->
                    <!--  <p class="description">Berbagai prestasi telah mampu di torehkan oleh <?= $setting['nama_sekolah'] ?> dalam berbagai ajang perlombaan baik dalam bidang akademik maupun non akademik yang diikuti oleh para siswa</p>-->
                    <!--</div>-->

                  </div>
                </div>
                
<div class="row content">
                  <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="tema/assets/img/4.png" class="img-fluid" alt="">
                  </div>
                   <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                    <!--<h3><?= $setting['nama_sekolah'] ?></h3>-->
                    <h3>Target Prestasi Kelas Khusus Sains & Tahfidz <?= $setting['nama_sekolah'] ?></h3>
                    <ul>
                      <li><i class="bi bi-arrow-bar-right"> Peserta didik mendapatkan piagam kejuaraan / lomba tingkat regional, nasional maupun Internasional</i></li>
                      <li><i class="bi bi-arrow-bar-right"> Peserta didik dapat mengaplikasikan konsep sains dalam rekayasa teknologi</i></li>
                       <li><i class="bi bi-arrow-bar-right"> Peserta didik Menguasai teknologi Informasi (IT)</i></li>                      <li><i class="bi bi-arrow-bar-right">Peserta didik kelas 7 minimal hafal 2 juz dalam 1 Tahun Pelajaran </i> </li>
                     <li>
                    <i class="bi bi-arrow-bar-right">Peserta didik lancar baca tulis Al Qur'an dan mampu khitobah </i> </li> 

                    </ul>
                  </div>
                </div>

              </div>
            </section>


            <section id="details" class="details">
              <div class="container">

                <div class="row content">
                  <div class="col-md-4" data-aos="fade-right">
                    <img src="tema/assets/img/3.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-8 pt-4" data-aos="fade-up">
                    <h3>Persyaratan PPDB Online Kelas Khusus Sains & Tahfidz <?= $setting['nama_sekolah'] ?></h3>
                    <p class="fst-italic">
                      Syarat - Syarat Yang harus dipenuhi untuk PPDB Online Kelas Khusus Sains & Tahfidz
                    </p>
                    <ul>
                    
                      
                      <!--<li><i class="bi bi-check"></i> Lulus SD/MI</li>-->
                      <!--<li><i class="bi bi-check"></i> Fotocopy Ijasah SD/MI</li>-->
                      <!--<li><i class="bi bi-check"></i> Fotocopy SKHUN</li>-->
                      <li><i class="bi bi-check"></i> Fotocopy Kartu Keluarga</li>
                      <li><i class="bi bi-check"></i> Fotocopy Akte Kelahiran</li>
                      <li><i class="bi bi-check"></i> Fotocopy KTP Orang Tua</li>
                      <li><i class="bi bi-check"></i> Fotocopy Nilai Raport Kelas 4,5 dan 6</li>
                      <!--<li><i class="bi bi-check"></i> Fotocopy KTP Orang Tua</li>-->
                      <!--<li><i class="bi bi-check"></i> Fotocopy PKH/KIP/KIS ( Jika ada)</li>-->
                    </ul>
                    <p>
                      Segera hubungi Contact Person Panitia PPDB Kelas Khusus <?= $setting['nama_sekolah'] ?> sebagai berikut :
                    </p>
                    <ul>
                    
                      
                      <!--<li><i class="bi bi-check"></i> Admin <?= $setting['nolivechat'] ?></li>-->
                      <li><i class="bi bi-check"></i> Contact Kelas Khusus Sains +62 856-4166-9409</li>
                      <li><i class="bi bi-check"></i> Contact Kelas Khusus Tahfidz +62 857-9985-1680</li>
                      <!--<li><i class="bi bi-check"></i> Fotocopy Kartu Keluarga</li>-->
                      <!--<li><i class="bi bi-check"></i> Fotocopy Akte Kelahiran</li>-->
                      <!--<li><i class="bi bi-check"></i> Fotocopy KTP Orang Tua</li>-->
                      <!--<li><i class="bi bi-check"></i> Fotocopy PKH/KIP/KIS ( Jika ada)</li>-->
                    </ul>
                  </div>
                </div>

                <div class="row content">
                  <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="tema/assets/img/2.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Alur Pendaftaran PPDB Online Kelas Khusus Sains & Tahfidz <?= $setting['nama_sekolah'] ?></h3>
                    <ul>
                      <li><i class="bi bi-arrow-bar-right"></i> Peserta didik mendaftar pada aplikasi PPDB Online <?= $setting['nama_sekolah'] ?> dengan mnegklik tombol daftar</li>
                      <li><i class="bi bi-arrow-bar-right"></i> Jika sudah pernah mendaftar PPDB Online <?= $setting['nama_sekolah'] ?> silakan Klik Login</li>
                      <li><i class="bi bi-arrow-bar-right"></i> Calon Peserta didik melengkapi form pendaftaran yang disediakan</li>
                      <li><i class="bi bi-arrow-bar-right"></i> calon peseta didik melengkapi data berkas dengan mengupload persyaratan yang diminta</li>
                      <li><i class="bi bi-arrow-bar-right"></i> berkas hardcopy dikumpulkan kepada panitia PPDB <?= $setting['nama_sekolah'] ?> </li>

                    </ul>
                  </div>
                </div>

              </div>

              </div>
            </section>


            <section id="contact" class="contact">
              <div class="container">

                <div class="section-title" data-aos="fade-up">
                  <h2>Contact Madrasah</h2>
                  <p>Contact Us</p>
                </div>

                <div class="row">

                  <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="info">
                      <div class="address">
                        <i class="bi bi-globe"></i>
                        <h4>Website:</h4>
                         <a href="http://mtsmuh07purbalingga.sch.id/" target="_blank" class="btn btn-success" style="margin: 5px; border-radius: 50px;">
                      <p><center> <?= $setting['web'] ?></p></center></a>
                       
                      </div>

                      <div class="email">
                        <i class="bi bi-phone"></i>
                        <h4>Telephone :</h4>
                        <p>&nbsp; <?= $setting['no_telp'] ?></p>
                      </div>

                      <div class="phone">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>&nbsp;<?= $setting['email'] ?></p>
                      </div>

                    </div>

                  </div>

                  <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2797.791281047364!2d109.51030858046873!3d-7.390337643571851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x27a00d6cf1eb747b!2sMTs%20Muhammadiyah%2007%20Purbalingga%20di%20Kejobong!5e0!3m2!1sid!2sid!4v1669395396523!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>

                </div>

              </div>
            </section>

          </main>


          <footer id="footer">


            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong><span><?= $setting['nama_sekolah'] ?></span></strong>
              </div>
              <div class="credits">

                develope by <a href="#">Nur.razdan & APM Code</a>
              </div>
            </div>
          </footer>

          <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
          <div id="preloader"></div>


          <script src="tema/assets/js/aos.js"></script>
          <script src="tema/assets/js/glightbox.min.js"></script>
          <script src="tema/assets/js/swiper-bundle.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <script src="tema/assets/js/main.js"></script>

          <script type="text/javascript">
            // (function() {
            //   var options = {
            //     whatsapp: "<?= $setting['nolivechat'] ?>", // WhatsApp number
            //     email: "<?= $setting['email'] ?>", // Email
            //     call_to_action: "Hubungi Kami!!!", // Call to action
            //     button_color: "#129BF4", // Color of button
            //     position: "left", // Position may be 'right' or 'left'
            //     order: "whatsapp,email", // Order of buttons
            //     pre_filled_message: "<?= $setting['livechat'] ?>", // WhatsApp pre-filled message
            //   };
            //   var proto = document.location.protocol,
            //     host = "getbutton.io",
            //     url = proto + "//static." + host;
            //   var s = document.createElement('script');
            //   s.type = 'text/javascript';
            //   s.async = true;
            //   s.src = url + '/widget-send-button/js/init.js';
            //   s.onload = function() {
            //     WhWidgetSendButton.init(host, proto, options);
            //   };
            //   var x = document.getElementsByTagName('script')[0];
            //   x.parentNode.insertBefore(s, x);
            // })();
          </script>
</body>

</html>
