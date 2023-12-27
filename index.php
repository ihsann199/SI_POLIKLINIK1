<?php
if (!isset($_SESSION)) {
  session_start();
}

include_once("koneksi.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>POLIKLINIK</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/dfabc0038b.js" crossorigin="anonymous" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar bg-primary">
    <div class="container">
      <a class="navbar-brand text-white" href="#">Sistem Informasi Poliklinik</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <?php
          if (isset($_SESSION['username'])) {
            //menu master jika user sudah login 
            ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php?page=obat">Obat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php?page=dokter">Dokter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php?page=poli">Poli</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php?page=pasien">Pasien</a>
            </li>
            <?php
          }
          ?>
        </ul>
        <?php
        if (isset($_SESSION['username'])) {
          // Jika pengguna sudah login, tampilkan tombol "Logout"
          ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="logoutUser.php">Logout (
                <?php echo $_SESSION['username'] ?>)
              </a>
            </li>
          </ul>
          <?php
        } else {
          // Jika pengguna belum login, tampilkan tombol "Login" dan "Register"
          ?>
          <ul class="navbar-nav ms-auto">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Login</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="index.php?page=loginUser">Admin</a>
                </li>
                <li>
                  <a class="dropdown-item" href="index.php?page=loginDokter">Dokter</a>
                </li>
              </ul>
            </li>
          </ul>
          <?php
        }
        ?>
      </div>
    </div>
  </nav>


  <main role="main" class="container">
    <?php
    if (isset($_GET['page'])) {
      include($_GET['page'] . ".php");
    } else {
      echo "<br><h2>Selamat Datang di Sistem Informasi Poliklinik";

      if (isset($_SESSION['username'])) {
        //jika sudah login tampilkan username
        echo ", " . $_SESSION['username'] . "</h2><hr>";
      } else {
        echo "</h2><hr>Silakan Login untuk menggunakan sistem. Jika belum memiliki akun silakan Register terlebih dahulu.";
      }
    }
    ?>
  </main>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotelku.</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"
      defer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"
      defer></script>
    <!-- swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dfabc0038b.js" crossorigin="anonymous" defer></script>


  </head>

  <body>


    <!-- slider -->

    <div class="content-slidee">
      <div class="imgslide fadee">
        <div class="numberslidee">1 / 4</div>
        <img class="gambar" src="source/slide1.jpg" alt="">
        <div class="text"></div>
      </div>

      <div class="imgslide fadee">
        <div class="numberslidee">2 / 4</div>
        <img class="gambar" src="source/slide2.jpg" alt="">
        <div class="text"></div>

      </div>

      <div class="imgslide fadee">
        <div class="numberslidee">3 / 4</div>
        <img class="gambar" src="source/slide3.jpg" alt="">
        <div class="text"></div>
      </div>
      <div class="imgslide fadee">
        <div class="numberslidee">4 / 4</div>
        <img class="gambar" src="source/slide4.jpg" alt="">
        <div class="text"></div>
      </div>
      <a class="prev" onClick="nextslide(-1)">&#10094;</a>
      <a class="next" onClick="nextslide(1)">&#10095;</a>
    </div>
    <div class="container">
      <div class="pagee">
        <span class="dot" onClick="dotslide(1)"></span>
        <span class="dot" onClick="dotslide(2)"></span>
        <span class="dot" onClick="dotslide(3)"></span>
        <span class="dot" onClick="dotslide(4)"></span>
      </div>
    </div>

    <!-- gallery -->
    <div class="container">
      <h1 class="h1">GALLERY</h1>
      <h2 class="h2">This our works</h2>
      <div class="full-img" id="fullImgBox">
        <img src="source/gallery1.jpg" alt="picture" id="fullImg" />
        <span onclick="closeFullImg()">x</span>
      </div>
      <div class="full-img" id="fullImgBox2">
        <img src="source/gallery2.jpg" alt="picture" id="fullImg2" />
        <span onclick="closeFullImg()">x</span>
      </div>
      <div class="full-img" id="fullImgBox3">
        <img src="source/gallery3.jpg" alt="picture" id="fullImg3" />
        <span onclick="closeFullImg()">x</span>
      </div>
      <div class="full-img" id="fullImgBox4">
        <img src="source/gallery4.jpg" alt="picture" id="fullImg4" />
        <span onclick="closeFullImg()">x</span>
      </div>
      <div class="full-img" id="fullImgBox5">
        <img src="source/gallery5.jpg" alt="picture" id="fullImg5" />
        <span onclick="closeFullImg()">x</span>
      </div>
      <div class="full-img" id="fullImgBox6">
        <img src="source/gallery6.jpg" alt="picture" id="fullImg6" />
        <span onclick="closeFullImg()">x</span>
      </div>
      <div class="img-gallery">
        <img src="source/gallery01.jpg" alt="picture" onclick="openFullImg(this.src)" />
        <img src="source/gallery02.jpg" alt="picture" onclick="openFullImg(this.src)" />
        <img src="source/gallery003.jpg" alt="picture" onclick="openFullImg(this.src)" />
        <img src="source/gallery04.jpg" alt="picture" onclick="openFullImg(this.src)" />
        <img src="source/gallery05.jpg" alt="picture" onclick="openFullImg(this.src)" />
        <img src="source/gallery06.jpg" alt="picture" onclick="openFullImg(this.src)" />
      </div>

      <!-- footer nav bar -->
      <div class="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row align-items-start">
              <div class="col" id="footer-col">
                <h3 class="text-center">About</h3>
                <p>
                  Poliklinik adalah tempat pelayanan yang mempunyai tugas untuk melakukan pemeriksaan kepada pasien
                  secara umum dengan mengetahui indikasi atau gejala yang diderita oleh pasien.
                  Selain itu, poliklinik juga terkadang mengadakan bakti sosial ke desa-desa setempat untuk membantu
                  warga di dalam proses sosialisasi mengenai kesehatan.
                  Kemudian, poliklinik juga bisa memberikan berupa rujukan rawat jalan atau rawat inap dengan memberikan
                  surat tersebut ke rumah sakit. Setelah mendapatkan diagnosa awal dari poliklinik, dokter dari klinik
                  akan memberikan surat rujukan ke rumah sakit.
                </p>
                <button class="btn btn-outline-primary">Learn more</button>
                <h4 class="text-center">Photo Stream</h4>
                <div class="photo">
                  <ul>
                    <li>
                      <a class="popup" href="#"><img src="source/g1.jpg" alt="Photo" /></a>
                    </li>
                    <li>
                      <a class="popup" href="#"><img src="source/g2.jpg" alt="Photo" /></a>
                    </li>
                    <li>
                      <a class="popup" href="#"><img src="source/g3.jpg" alt="Photo" /></a>
                    </li>
                    <li>
                      <a class="popup" href="#"><img src="source/g4.jpg" alt="Photo" /></a>
                    </li>
                    <li>
                      <a class="popup" href="#"><img src="source/g5.jpg" alt="Photo" /></a>
                    </li>
                    <li>
                      <a class="popup" href="#"><img src="source/g6.jpg" alt="Photo" /></a>
                    </li>
                  </ul>
                </div>
              </div>


              <div class="col" id="footer-col">
                <h3 class="text-center2">Contact Info</h3>
                <div class="footer-list">
                  <ul>
                    <li>
                      <i class="fa-solid fa-map-location-dot fa-lg" id="brands"></i>
                      <p>
                      Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131
                      </p>
                      <div class="clear"></div>
                    </li>
                    <li>
                      <i class="fa-brands fa-square-whatsapp fa-xl" id="brands"></i>
                      <p>
                        Phone :
                        <a>+62 21 445 658 <br />
                          +62 21 524 847</a>
                      </p>
                      <div class="clear"></div>
                    </li>
                    <li>
                      <i class="fa-solid fa-square-envelope fa-lg" id="brands"></i>
                      <p>
                        Email :
                        <a href="#" id="email">poliklinik@gmail.com</a>
                      </p>
                      <div class="clear"></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer nav bar -->
        <div class="footer-bottom">
          <div class="container">
            <div class="footer-copyright grey darken-4">
              &copy; 2023 <a class="brand"> Poliklinik </a>
            </div>
          </div>
        </div>
      </div>
      <script src="js/main.js"></script>
      <script src="dist/sweetalert2.all.min.js"></script>
  </body>

  </html>