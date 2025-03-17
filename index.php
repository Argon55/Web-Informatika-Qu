<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Informatika-Qu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="css/main.css" rel="stylesheet">
  <link href="css/start.css" rel="stylesheet" />
  <link href="css/card.css" rel="stylesheet" />

</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <h4 class="sitename">Informatika-Qu</h4>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about" data-bs-toggle="modal" data-bs-target="#modalTampiluniversitas">Alternatif PTS</a></li>
            <li><a href="https://pmb.almaata.ac.id/">Info PMB</a></li>
            <li><a href="#gallery">News</a></li>
            <li><a href="#footer">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#loginadmin" href="#">Login Admin</a>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/jogja.png" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>SISTEM INFORMATIKA-QU</h2>
          <p>Rekomendasi Pilih PTS JOGJA</p>
        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h4 class="text-center fw-bold">Apa itu Sistem Informatika-Qu?</h4>
              <p class="text-center">
                Sistem Informatika-Qu adalah, sistem pendukung keputusan pemilihan Perguruan Tinggi Swasta program studi Informatika/Tek. Informatika di kota pelajar, Kota Yogyakarta.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><span data-bs-toggle="modal" data-bs-target="#modalHitung">AYO COBA HITUNG</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="fas fa-university"></i>
                    <h4>Alternatif PTS Pilihan</h4>
                    <p>Data alternatif pilihan PTS yang tersedia pada sistem diantaranya.</p>
                    <div class="text-center" data-bs-toggle="modal" data-bs-target="#modalTampiluniversitas">
                    <a href="#about" class="more-btn"><span>LIHAT</span></i></a>
                    </div>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="fa-solid fa-rupiah-sign"></i>
                    <h4>Biaya Kuliah</h4>
                    <p>Perkiraan biaya kuliah pada semester awal atau semester 1 Pada PTS alternatif pilihan.</p>
                    <div class="text-center"data-bs-toggle="modal" data-bs-target="#modalTampilbiaya">
                    <a href="#about" class="more-btn"><span>LIHAT</span></i></a>
                    </div>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="fa-solid fa-ranking-star"></i>
                    <h4>TOP 9 PTNU</h4>
                    <p>Top 9 Perguruan Tinggi Nahdlatul Ulama Se-Indonesia versi Impact Rank Webometrics.</p>
                    <div class="text-center" data-bs-toggle="modal" data-bs-target="#modalTampilptnu">
                    <a href="#about" class="more-btn"><span>LIHAT</span></i></a>
                    </div>
                  </div>
                </div><!-- End Icon Box -->
              </div>
            </div>
          </div>
        </div><!-- End  Content-->
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center shadow-lg p-3 bg-body rounded">
            <i class="fa-solid fa-person-walking-luggage"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Visitor</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center shadow-lg p-3 bg-body rounded">
            <i class="fa-solid fa-user"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="10000" data-purecounter-duration="1" class="purecounter"></span>
              <p>User</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center shadow-lg p-3 bg-body rounded">
            <i class="fa-solid fa-graduation-cap"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>PTS Alternatif</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center shadow-lg p-3 bg-body rounded">
            <i class="fas fa-sitemap"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kriteria</p>
            </div>
          </div><!-- End Stats Item -->
        </div>
      </div>
    </section><!-- /Stats Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>NEWS</h2>
        <p>Berita seputar pendidikan Perguruan Tinggi Daerah Istimewa Yogyakarta</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <center>
              <div class="card shadow-lg p-3 bg-body rounded" style="width: 23rem;">
                <img src="assets/img/tribun.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">tribunjogja.com</h5>
                  <p class="card-text">Peringkat Universitas Alma Ata Versi Unirank, Rangking 5 setelah UGM,UNY,..</p>
                  <a href="https://jogja.tribunnews.com/2024/02/22/peringkat-universitas-alma-ata-yogyakarta-versi-unirank-rangking-5-setelah-ugm-uny-uii-umy" class="btn btn-start">Baca Selengkapnya</a>
                </div>
              </div>
              </center>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <center>
              <div class="card shadow-lg p-3 bg-body rounded" style="width: 23rem;">
                <img src="assets/img/kompas.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">kompas.com</h5>
                  <p class="card-text">27 Universitas Terbaik di Yogyakarta 2024, Referensi Kuliah di Kota Pendidikan</p>
                  <a href="https://edukasi.kompas.com/read/2024/05/03/152830971/27-universitas-terbaik-di-yogyakarta-2024-referensi-kuliah-di-kota" class="btn btn-start">Baca Selengkapnya</a>
                </div>
              </div>
              </center>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <center>
              <div class="card shadow-lg p-3 bg-body rounded" style="width: 23rem;">
                <img src="assets/img/detik.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">detikjogja</h5>
                  <p class="card-text">Universitas Alma Ata Jadi Kampus NU Nomor 1 di Indonesia Versi Unirank</p>
                  <a href="https://www.detik.com/jogja/kota-pelajar/d-7206681/universitas-alma-ata-jadi-kampus-nu-nomor-1-di-indonesia-versi-unirank" class="btn btn-start">Baca Selengkapnya</a>
                </div>
              </div>
              </center>
            </div>
          </div><!-- End Gallery Item -->
        </div>
      </div>
    </section>
    <!-- /Gallery Section -->

                    <!-- Awal Modal Tampil universitas-->
                        <div class="modal fade" id="modalTampiluniversitas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="card mb-4  mt-0 shadow-lg p-3 bg-body rounded">
                                  <div class="card-header bg-primary" style="font-size:13px;">
                                        <center class="fw-bold">
                                        <i class="fas fa-user-friends"></i>
                                        Data Alternatif PTS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </center>
                                  </div>
                                  <div class="card-body" style="color:#20B2AA;">
                                    <table class="table border-1" style="color:#0000FF; font-size: 12px;">
                                      <thead>
                                        <tr class="text-center text-primary">
                                            <th>No</th>
                                            <th>Nama PTS</th>
                                        </tr>
                                      </thead>                            
                                        <?php 
                                        include('koneksi.php');

                                          $no = 1;

                                          $tampil = mysqli_query($conn, "SELECT * FROM universitas ORDER BY id ASC");
                                          while($data = mysqli_fetch_array($tampil)) :
                                        ?>
                                        
                                        <tr class="text-center">
                                            <td><?= $no++ ?></td>
                                            <td><?=$data['nama']?></td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </table>
                                  </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                      <!-- Akhir Modal Tampil universitas-->

                      <!-- Awal Modal Tampil Biaya Kuliah-->
                        <div class="modal fade" id="modalTampilbiaya" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="card mb-4  mt-0 shadow-lg p-3 bg-body rounded">
                                  <div class="card-header bg-primary" style="font-size:13px;">
                                        <center class="fw-bold">
                                        <i class="fas fa-user-friends"></i>
                                        Data Perkiraan Biaya Kuliah Semester Awal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </center>
                                  </div>
                                  <div class="card-body" style="color:#20B2AA;">
                                    <table class="table border-1" style="color:#0000FF; font-size:12px;">
                                      <thead>
                                        <tr class="text-center text-primary">
                                            <th>No</th>
                                            <th>Nama PTS</th>
                                            <th>Perkiraan Biaya</th>
                                        </tr>
                                      </thead>                            
                                        <?php 
                                        include('koneksi.php');

                                          $no = 1;

                                          $tampil = mysqli_query($conn, "SELECT * FROM universitas ORDER BY id ASC");
                                          while($data = mysqli_fetch_array($tampil)) :
                                        ?>
                                        
                                        <tr class="text-center">
                                            <td><?= $no++ ?></td>
                                            <td><?=$data['nama']?></td>
                                            <td><?=$data['biaya']?></td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </table>
                                  </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                      <!-- Akhir Modal Tampil Biaya Kuliah-->

                      <!-- Awal Modal Tampil PTNU-->
                        <div class="modal fade" id="modalTampilptnu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="card mb-4  mt-0 shadow-lg p-3 bg-body rounded">
                                  <div class="card-header bg-primary" style="font-size:13px;">
                                        <center class="fw-bold">
                                        <i class="fa-solid fa-ranking-star"></i>
                                        Data Peringkat PTNU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </center>
                                  </div>
                                  <div class="card-body" style="color:#20B2AA;">
                                    <table class="table border-1" style="color:#0000FF; font-size:12px;">
                                      <thead>
                                        <tr class="text-center text-primary">
                                            <th>Peringkat</th>
                                            <th>Nama PTNU</th>
                                        </tr>
                                      </thead>                            
                                        <tr class="text-center">
                                          <td>1</td>
                                          <td>Universitas Alma Ata Yogyakarta</td>
                                        </tr>
                                        <tr class="text-center">
                                          <td>2</td>
                                          <td>Universitas Islam Darul Ulum Lamongan</td>
                                        </tr>
                                        <tr class="text-center">
                                          <td>3</td>
                                          <td>Universitas Islam Malang</td>
                                        </tr>
                                        <tr class="text-center">
                                          <td>4</td>
                                          <td>Universitas Nahdlatul Ulama Surabaya</td>
                                        </tr>
                                        <tr class="text-center">
                                          <td>5</td>
                                          <td>STAI Indonesia</td>
                                        </tr>
                                        <tr class="text-center">
                                          <td>6</td>
                                          <td>Universitas Islam Kalimantan Uniska</td>
                                        </tr>
                                        <tr class="text-center">
                                          <td>7</td>
                                          <td>Universitas Wahid Hasyim</td>
                                        </tr>
                                        <tr class="text-center">
                                          <td>8</td>
                                          <td>Universitas Nahdlatul Ulama Jepara</td>
                                        </tr>
                                        <tr class="text-center">
                                          <td>9</td>
                                          <td>Universitas Pesantren Darul Ulum Jombang</td>
                                        </tr>
                                    </table>
                                  </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                      <!-- Akhir Modal Tampil PTNU-->

                      <!-- Awal Modal loginadmin -->
                      <div class="modal fade text-dark" id="loginadmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content text-white">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Login Admin</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="login.php">
                              <div class="modal-body text-dark">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="lemail" id="email" placeholder="Masukan email!">
                                  </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="text" class="form-control" name="lpassword" id="password" placeholder="Masukan password!">
                                </div>
                                </div>
                                                              
                               <div class="modal-footer text-center">
                                <button type="submit" class="btn btn-start text-center" name="login">Login</button>
                              </div>
                          </form>

                          </div>
                        </div>
                      </div>
                      <!-- Akhir Modal loginadmin-->


  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Informatika-Qu</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Argon Widodo</p>
            <p>Sungai Are, OKU Selatan, Sumatera Selatan </p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 852 6803 3596</span></p>
            <p><strong>Email:</strong> <span>4r6on55wydodo@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-5 col-md-3 footer-links">
          <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 230px;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=simpangluas" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
        </div>

      </div>
    </div>

                                <!-- Awal Modal hitung -->
                      <div class="modal fade text-dark" id="modalHitung" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content text-black">
                            <div class="modal-header l-bg-c2">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Input Skala Prioritas Kriteria</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form method="POST" action="hitungtopsis.php">
                              <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Kriteria Akreditasi Universitas (C1)</label>
                                      <select class="form-select"  required name="akreditasipts">
                                        <option value = "" disabled selected class="text-blur">Akreditasi Universitas</option>
                                        <option value="1">Sangat Tidak Penting</option>
                                        <option value="2">Tidak Penting</option>
                                        <option value="3">Cukup Penting</option>
                                        <option value="4">Penting</option>
                                        <option value="5">Sangat Penting</option>
                                      </select>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">Kriteria Akreditasi Program Studi(C2)</label>
                                      <select class="form-select"  required name="akreditasiprodi">
                                        <option value = "" disabled selected class="text-blur">Akreditasi Program Studi</option>
                                        <option value="1">Sangat Tidak Penting</option>
                                        <option value="2">Tidak Penting</option>
                                        <option value="3">Cukup Penting</option>
                                        <option value="4">Penting</option>
                                        <option value="5">Sangat Penting</option>
                                      </select>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">Kriteria Beasiswa (C2)</label>
                                      <select class="form-select" required name="beasiswa">
                                        <option value = "" disabled selected class="text-blur">Beasiswa</option>
                                        <option value="1">Sangat Tidak Penting</option>
                                        <option value="2">Tidak Penting</option>
                                        <option value="3">Cukup Penting</option>
                                        <option value="4">Penting</option>
                                        <option value="5">Sangat Penting</option>
                                      </select>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">Kriteria Biaya Kuliah (C3)</label>
                                      <select class="form-select" required name="biaya">
                                        <option value = "" disabled selected class="text-blur">Biaya Kuliah</option>
                                        <option value="5">Sangat Tidak Penting</option>
                                        <option value="4">Tidak Penting</option>
                                        <option value="3">Cukup Penting</option>
                                        <option value="2">Penting</option>
                                        <option value="1">Sangat Penting</option>
                                      </select>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label">Kriteria Fasilita (C4)</label>
                                      <select class="form-select" required name="fasilitas">
                                        <option value = "" disabled selected class="text-blur">Fasilitas</option>
                                        <option value="1">Sangat Tidak Penting</option>
                                        <option value="2">Tidak Penting</option>
                                        <option value="3">Cukup Penting</option>
                                        <option value="4">Penting</option>
                                        <option value="5">Sangat Penting</option>
                                      </select>
                                  </div>
                              </div>
                                
                               <div class="modal-footer text-center">
                                <button type="submit" class="btn btn-start" name="bhitung">HITUNG</button>
                              </div>
                          </form>

                          </div>
                        </div>
                      </div>
                      <!-- Akhir Modal hitung-->

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Argon Ganteng</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>