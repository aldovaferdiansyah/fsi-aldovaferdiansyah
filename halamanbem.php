<?php
    $dokumentasi=json_decode(file_get_contents("JSON/dokumentasi_ormawa.json"))->dokumentasi_ormawa;
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
    <header id="header_ormawa" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo mr-auto"><img src="Gambar/Logo.png"></a>
        <b>FAKULTAS SAINS DAN INFORMATIKA</b>
        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active" href="#">Beranda</a></li>
            <li><a class="nav-link scrollto" href="https://www.instagram.com/bemfsiunjani/">Sosial Media</a></li>
            <li><a class="nav-link scrollto" href="logout.php" onclick="return confirm('Apakah Anda Yakin ?')">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        </div>
        </header>
        <section id="studi">
            <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">BEM FSI Unjani</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Berikut adalah penjelasan sekaligus pengenalan seputar BEM FSI pada Fakultas Sains Dan Informatika UNJANI Cimahi</p>
                    </div>
                  </div>
                </div>
                <div class="container studi-container" data-aos="fade-up" data-aos-delay="200">
                  <div class="row">      
                    <div class="col-lg-6 studi-img">
                        <img src="Gambar/BEMFSI.png">
                    </div>
                    <div class="col-md-6 about-content">
                    <h2 class="studi-title">Badan Eksekutif Mahasiswa FSI Unjani</h2>
                    <p class="studi-text">
                      BEM atau Badan Eksekutif Mahasiswa merupakan organisasi yang kegiatannya sangat direkomendasikan untuk diikuti oleh mahasiswa. Sesuai dengan namannya, Badan Eksekutif Mahasiswa sebagai organisasi mahasiswa untuk tingkat Universitas ataupun institute. Tugas Dari BEM tersebut pun melingkupi banyak hal. Mulai melaksanakan program kerja (proker) yang ada di kampus hingga menjadi perwakilan aspirasi bagi para mahasiswa.
                    </p>
                    <p class="studi-text">
                    Berikut adalah beberapa fungsi dari adanya organisasi Badan Eksekutif Mahassiswa pada sebuah perguruan tinggi, yaitu sebagai berikut : <br><br>
                    1. Sebagai lembaga tinggi mahasiswa yang akan mengakomodir seluruh kepentingan mahasiswa di kampus. <br>
                    2. Sebagai Agent of change dalam kehidupan berbangsa dan bernegara. <br>
                    3. Sebagai social control dalam melihat setiap kebijakan baik dalam lembaga kampus maupun dalam pemerintahan Republik Indonesia ( regional dan nasional ). <br>
                    4. Membangun sinergitas dengan seluruh ormawa di kampus. <br>
                    5. Sebagai fasilitator dalam menjaring aspirasi mahasiswa.
                    </p>
                    <?php
                    foreach($dokumentasi as $gambar):
                    if($gambar->judul=="BEM FSI Unjani"):
                    ?>
                    <form action="dokumentasi_ormawa.php">
                        <input type="hidden" name="judul" value="<?=$gambar->judul?>">
                        <button type="submit">Dokumentasi BEM FSI Unjani</button>
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