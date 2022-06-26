<?php
    $dokumentasi=json_decode(file_get_contents("JSON/dokumentasi_ormawa.json"))->dokumentasi_ormawa;
    $search = false;

    if (isset($_GET["judul"])){
        foreach ($dokumentasi as $c){
            $pattern = "/{$_GET["judul"]}/i";
            if (preg_match_all($pattern, $c->judul)) $search = $c;
        }
    }
    if($search) $dokumentasi = $search;
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
            <li><a class="nav-link scrollto active" href="Dokumentasi_ormawa.php">Dokumentasi</a></li>
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
                    <h3 class="section-title">Dokumentasi</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Berikut adalah berkas dokumentasi seputar <b><?=$dokumentasi->judul?></b> pada Fakultas Sains Dan Informatika UNJANI Cimahi</p>
                    </div>
                  </div>
                </div>
                <div class="container studi-container" data-aos="fade-up" data-aos-delay="200">
                  <div class="row">      
                    <div class="col-lg-6 studi-img">
                        <img src="<?=$dokumentasi->konten?>">
                    </div>
                    <div class="col-md-3 studi-img">
                        <img src="<?=$dokumentasi->konten1?>">
                </div>
                <div class="col-md-3 studi-img">
                        <img src="<?=$dokumentasi->konten2?>">
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