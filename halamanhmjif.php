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
            <li><a class="nav-link scrollto" href="https://www.instagram.com/hmif_unjani/">Sosial Media</a></li>
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
                    <h3 class="section-title">HM KMJ IF Unjani</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Berikut adalah penjelasan sekaligus pengenalan seputar HM KMJ IF pada Fakultas Sains Dan Informatika UNJANI Cimahi</p>
                    </div>
                  </div>
                </div>
                <div class="container studi-container" data-aos="fade-up" data-aos-delay="200">
                  <div class="row">      
                    <div class="col-lg-6 studi-img">
                        <img src="Gambar/KMJIF.png">
                    </div>
                    <div class="col-md-6 about-content">
                    <h2 class="studi-title"><center>Himpunan Mahasiswa Jurusan Informatika Unjani</center></h2>
                    <p class="studi-text">
                      Himpunan Mahasiswa atau Hima merupakan salah satu organisasi mahasiswa yang berada di tingkat jurusan dan termasuk organisasi intra kampus, serta bagian dari kegiatan ekstra kurikuler yang dapat dipilih dan diikuti oleh setiap mahasiswa. Hadirnya organisasi Himpunan Mahasiswa tersebut, berasal dari prinsip dari, oleh serta untuk mahasiswa. Hima menjadi media bagi para anggotanya agar mampu mengembangkan pola pikir, kepribadian serta potensi yang dimiliki oleh setiap mahasiswa yang berkaitan dengan disiplin ilmu, agar setelah lulus dari perguruan tinggi maka mahasiswa siap untuk terjun langsung ke masyarakat.
                    </p>
                    <p class="studi-text">
                    Pada dasarnya, Himpunan Mahasiswa ada dua yaitu Himpunan Mahasiswa Jurusan atau HMJ serta Himpunan Mahasiswa Program Studi atau HMPS yang berada di tingkat fakultas serta berada di bawah koordinasi dari para Senat Mahasiswa atau BEM fakultas, sehingga seluruh kegiatan yang diadakan oleh HMJ atau HMPS haruslah memiliki afiliasi dengan program-program yang ada pada Senat Mahasiswa.
                    </p>
                    <?php
                    foreach($dokumentasi as $gambar):
                    if($gambar->judul=="HM KMJ IF Unjani"):
                    ?>
                    <form action="dokumentasi_ormawa.php">
                        <input type="hidden" name="judul" value="<?=$gambar->judul?>">
                        <button type="submit">Dokumentasi HM KMJ IF Unjani</button>
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