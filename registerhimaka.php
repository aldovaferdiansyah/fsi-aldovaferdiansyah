<?php   
    if(isset($_POST["register"])){
    $register=json_decode(file_get_contents("JSON/himaka.json")); 
    $data = [
        "nama" => $_POST["nama"],
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    ];
    $register[] = $data;

    $strem = fopen("JSON/himaka.json", "w");
    fwrite($strem, json_encode($register));
    header("location: loginhimaka.php");
    }
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
            <li class="dropdown"><a href="#"><span>Program Studi</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="kimia.php">KIMIA</a></li>
                    <li><a href="informatika.php">INFORMATIKA</a></li>
                    <li><a href="si.php">SISTEM INFORMASI</a></li>
                    <li><a href="makimia.php">MAGISTER KIMIA</a></li>
                </ul>
                </li>
            <li class="dropdown"><a class="nav-link scrollto active" href="#"><span>Kemahasiswaan</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li class="dropdown"><a href="#"><span>ORMAWA</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="loginbem.php">BEM FSI Unjani</a></li>
                        <li><a href="loginhmjif.php">HM KMJ IF Unjani</a></li>
                        <li><a href="#">HIMAKA Unjani</a></li>
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
            <li><a class="nav-link scrollto" href="#">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        </div>
        </header>
        <div class="login">
        <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Register HIMAKA FSI Unjani</h3>
            <div class="section-title-divider"></div>
            <p class="section-description"></p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="" method="POST" role="form" class="php-email-form">
                <div class="form-group">
                  <label for="nama"><b>Nama Lengkap</b></label>
                  <input type="nama" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap Anda ..." required>
                </div>
                <div class="form-group">
                  <br><label for="email"><b>E-Mail Address</b></label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Alamat E-mail Anda ..." required>
                </div>
                <div class="form-group mt-3">
                  <label for="password"><b>Password</b></label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password Anda ..." required>
                </div>
                <br><div class="text-center"><button type="submit" name="register" >Register</button></div>
              </form>
              <div class="tambahan">
                Sudah Punya Akun ?
                <a href="loginhimaka.php"><b> Login Di Sini </b></a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
        </div>
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