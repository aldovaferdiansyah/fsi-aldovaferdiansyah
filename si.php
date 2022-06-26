<?php
    $datadokumentasi=json_decode(file_get_contents("JSON/dokumentasi.json"))->dokumentasi;
?>
<!DOCTYPE html>
<html>
<head>
    <title>FAKULTAS SAINS DAN INFORMATIKA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <!-- HEADER -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo mr-auto"><img src="Gambar/Logo.png"></a>
        <b>FAKULTAS SAINS DAN INFORMATIKA</b>
        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto" href="index.php">Beranda</a></li>
            <li class="dropdown"><a class="nav-link scrollto active"  href="#"><span>Program Studi</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="kimia.php">KIMIA</a></li>
                    <li><a href="informatika.php">INFORMATIKA</a></li>
                    <li><a href="#">SISTEM INFORMASI</a></li>
                    <li><a href="makimia.php">MAGISTER KIMIA</a></li>
                </ul>
                </li>
            <li class="dropdown"><a href="#"><span>Kemahasiswaan</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li class="dropdown"><a href="#"><span>ORMAWA</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="loginbem.php">BEM FSI Unjani</a></li>
                        <li><a href="loginhmjif.php">HM KMJ IF Unjani</a></li>
                        <li><a href="loginhimaka.php">HIMAKA Unjani</a></li>
                    </ul>
                    </li>
                    <li><a href="https://ikaunjani.ac.id/">Alumni</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="#"><span>PMB 2022</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                      <li><a href="https://www.pmb.unjani.ac.id/">Info Penerimaan Mahasiswa Baru 2022</a></li>
                      <li><a href="https://pendaftaran.unjani.ac.id/login">Pendaftaran Online 2022</a></li>
                  </ul>
              </li>
            <li><a class="nav-link scrollto" href="about.php">About Us</a></li>    
            <li><a class="nav-link scrollto " href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        </div>
        </header>
        <section id="studi">
            <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Program Studi</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Berikut adalah penjelasan sekaligus pengenalan seputar Studi Sistem Informasi pada Fakultas Sains Dan Informatika UNJANI Cimahi</p>
                    </div>
                  </div>
                </div>
                <div class="container studi-container" data-aos="fade-up" data-aos-delay="200">
                  <div class="row">      
                    <div class="col-lg-6 studi-img">
                        <img src="Gambar/IF.jpg">
                    </div>
          
                    <div class="col-md-6 about-content">
                    <h2 class="studi-title">Studi Sistem Informasi S1</h2>
                    <p class="studi-text">
                    Jurusan Sistem Informasi adalah bidang keilmuan yang menggabungkan ilmu komputer dengan bisnis dan manajemen. Di prodi ini kamu akan belajar gimana mengidentifikasi kebutuhan dan proses bisnis perusahaan berdasarkan data-data yang dimiliki perusahan, kemudian merancang sistem yang sesuai dengan kebutuhan perusahaan. Sistem informasi merupakan studi tentang mengumpulkan, menyaring, dan mendistribusikan data. Sistem informasi merupakan studi yang menggabungkan ilmu komputer dengan bisnis dan manajemen. Sistem informasi bermanfaat untuk menggali informasi dan pengetahuan yang dilakukan setelah lulus sekolah menengah atas.
                    </p>
                    <p class="studi-text">
                        
                    </p>
                    <form action="https://si.unjani.ac.id/">
                      <button type="text">Kunjungi Website Sistem Informasi Unjani</button>
                    </form>
                    <?php
                    foreach($datadokumentasi as $foto):
                    if($foto->studi=="Studi Sistem Informasi"):
                    ?>
                    <form action="dokumentasi.php">
                      <input type="hidden" name="studi" value="<?=$foto->studi?>">
                      <button type="text">Dokumentasi Studi Sistem Informasi Unjani</button>
                    </form>
                    <?php
                    endif;
                    endforeach;
                    ?>
                </div>
            </div>
            </div>
        </section>
        <footer id="footer">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="copyright">
                        Copyright &copy; <strong><a href="https://www.instagram.com/aldovaaa__/">3411211002_Aldova Ferdiansyah</a></strong>                      
                      </div>
                      <div class="credits">
                        TUGAS UAS PRAKTIKUM PEMROGRAMMAN WEB 
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>