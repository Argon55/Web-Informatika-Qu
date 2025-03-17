<?php
session_start();
require_once "fungsi_user.php";

//jika user belum login
if ( !isset($_SESSION['email']) ){
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <title>Dashboard user</title>
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/card.css" rel="stylesheet" />
        <link href="css/start.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav bg-light">
            <div class="fw-bold mt-4 mb-2" id="sidebarToggle">
                <center>
                <a href="#!"><h3 style="color:#145154;" class="text-center fw-bold"><i class="fas fa-bars"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DASHBOARD USER INFORMATIKA-QU</h3>
                </center>                
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading fw-bold text-center" style="color:#20B2AA;">User Element</div>
                            <a class="nav-link fw-bold" href="#">
                                <div class="sb-nav-link-icon fw-bold"><i class="fas fa-tachometer-alt" style="color:#20B2AA;"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link fw-bold" href="#">
                                <div class="sb-nav-link-icon fw-bold"><i class="fas fa-square-root-alt" style="color:#20B2AA;"></i></div>
                                Perhitungan Topsis
                            </a>
                            <a class="nav-link fw-bold" href="#">
                                <div class="sb-nav-link-icon fw-bold"><i class="fas fa-ellipsis-h" style="color:#20B2AA;"></i></div>
                                More
                            </a>

                            <div class="sb-sidenav-menu-heading fw-bold text-center" style="color:#20B2AA;">Profil</div>
                            <a class="nav-link fw-bold" href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user" style="color:#20B2AA;"></i></div>
                                Profil
                            </a><br>
                            <div class="sb-sidenav-menu-heading fw-bold text-center">
                                <a href="logout.php"><button class="btn btn-out shadow-lg">
                                    <span class="text-danger fw-bold"><i class="fas fa-power-off  pe-1" style="color:#FF0000;" name="blogout"></i> Logout</span>
                                </button></a>
                            </div>
                        </div>
                    </div>
                    <footer class="mb-2 text-center">
                        <div class="footer small text-center text-dark-50"><div class="container px-4 px-lg-5">Copyright &copy;</div><p class="fw-bold">Argon Ganteng 2024</p>
                        </div>
                    </footer>
                </nav>
            </div>

            <div id="layoutSidenav_content" class="bg-light mt-5">
                <main class="">
                    <div class="container-fluid px-4 bg-light">
                        <div class="row">
                            <div class="col-12 col-md-4" style="width: 21rem;">
                                <div class="card mt-4 shadow-lg">
                                    <div class="card-body">
                                        <img src="assets/img/Rekomendasi.png" style="width: 19.3rem; height:15.3rem;" class="text-center">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4" style="width: 24rem;">
                                <div class="card mt-4 border-0">
                                    <div class="card-header py-4" style="width: 22.5rem;">
                                        <div class="shadow-lg p-3">
                                            <div class="text-center">
                                                    <h4 class="fw-bold text-primary">Tentukan Pilihanmu,</h4>
                                                    <h4 class="fw-bold text-primary mb-1">Sekarang!</h4>
                                                    <img src="assets/img/panahbawah.gif" style="width: 2rem; height: 3rem;" class="text-center mt-2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-start shadow-lg mt-3">
                                            <span data-bs-toggle="modal" data-bs-target="#modalHitung" class="text-success fw-bold">START</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4" style="width: 22.2rem;">
                                <div class="card mt-4 flex-fill border-1 text-black shadow-lg">
                                <div class="card-body py-3 mt-2" style="width: 20.2rem;">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <ul>
                                                <h4 class="fw-bold text-black">INFORMATIKA-QU</h4>
                                            </ul>
                                            <ul style="font-size: 15px;">
                                                <p>Algoritma Perhitungan (TOPSIS).</p>
                                            </ul>
                                            <ul style="font-size: 15px;">
                                                <p>Klik "<a>START</a>" untuk perhitungan!</p>
                                            </ul>
                                            <ul style="font-size: 15px;">
                                                <p>Input bobot kriteria dengan memilih skala kepentingan prioritas per kriteria.</p>
                                            </ul>
<!--                                             <ul style="font-size: 15px;" class="mb-2">
                                                <p>Lihat hasil Rekomendasi InformatikaQ.</p>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card p-3 mb-0">
                                    <div class="card text-black border-0 mb-1">
                                      <div class="card-header ">
                                        <div class="row ">
                                          <div class="col-md-8">
                                            <div class="ms-2 c-details">
                                                <p style="font-size: 15px;" class="mb-0">Akreditasi</p><span style="font-size: 14px;">Program Studi</i></span>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="float-right">
                                              <div class="badge text-success"> <span>Benefit</span></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-body mt-3" style="font-size: 13px;">
                                        <div class="mt-2 text-center"> <span class="text1">UMY (Unggul) </span></div>
                                        <div class="mt-2 text-center"> <span class="text1">Alma Ata (Baik Sekali) </span></div>
                                        <div class="mt-2 text-center"> <span class="text1">Unjaya (Baik) </span></div>
                                        <div class="mt-2 text-center" data-bs-toggle="modal" data-bs-target="#modalTampilakreditasi"><a href="#" class="text-center">Lainnya</a></div>
                                        <div class="mt-4">
                                            <div class="progress">
                                                <div class="progress-bar l-bg-c2" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-3 mb-0">
                                    <div class="card text-black border-0 mb-1">
                                      <div class="card-header ">
                                        <div class="row ">
                                          <div class="col-md-8">
                                            <div class="ms-2 c-details">
                                                <p style="font-size: 15px;" class="mb-0">Beasiswa</p><span style="font-size: 14px;">Universitas</i></span>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="float-right">
                                              <div class="badge text-success"> <span>Benefit</span></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-body mt-3" style="font-size: 13px;">
                                        <div class="mt-2 text-center"> <span class="text1">USD (25 Beasiswa) </span></div>
                                        <div class="mt-2 text-center"> <span class="text1">Alma Ata (9 Beasiswa) </span></div>
                                        <div class="mt-2 text-center"> <span class="text1">UST (4 Beasiswa) </span></div>
                                        <div class="mt-2 text-center" data-bs-toggle="modal" data-bs-target="#modalTampilBeasiswa"><a href="#" class="text-center">Lainnya</a></div>
                                        <div class="mt-4">
                                            <div class="progress">
                                                <div class="progress-bar l-bg-c2" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-3 mb-0">
                                    <div class="card text-black border-0 mb-1">
                                      <div class="card-header ">
                                        <div class="row ">
                                          <div class="col-md-8">
                                            <div class="ms-2 c-details">
                                                <p style="font-size: 15px;" class="mb-0">Biaya Kuliah</p><span style="font-size: 14px;">Program Studi</i></span>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="float-right">
                                              <div class="badge text-danger"> <span>Cost</span></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-body mt-3" style="font-size: 13px;">
                                        <div class="mt-2 text-center"> <span class="text1">USD 27.885.000,-  </span></div>
                                        <div class="mt-2 text-center"> <span class="text1">Alma Ata 8.150.000,-  </span></div>
                                        <div class="mt-2 text-center"> <span class="text1">Unjaya 10.515.000,-   </span></div>
                                        <div class="mt-2 text-center" data-bs-toggle="modal" data-bs-target="#modalTampilBiaya"><a href="#" class="text-center">Lainnya</a></div>
                                        <div class="mt-4">
                                            <div class="progress">
                                                <div class="progress-bar l-bg-c2" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-3 mb-0">
                                    <div class="card text-black border-0 mb-1">
                                      <div class="card-header ">
                                        <div class="row ">
                                          <div class="col-md-8">
                                            <div class="ms-2 c-details">
                                                <p style="font-size: 15px;" class="mb-0">Fasilitas</p><span style="font-size: 14px;">Program Studi</i></span>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="float-right">
                                              <div class="badge text-success"> <span>Benefit</span></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-body mt-3" style="font-size: 13px;">
                                        <div class="mt-2 text-center"> <span class="text1">Amikom (Sangat Lengkap)</span></div>
                                        <div class="mt-2 text-center"> <span class="text1">Alma Ata (Lengkap)</span></div>
                                        <div class="mt-2 text-center"> <span class="text1">UST (Standart)</span></div>
                                        <div class="mt-2 text-center" data-bs-toggle="modal" data-bs-target="#modalTampilFasilitas"><a href="#" class="text-center">Lainnya</a></div>
                                        <div class="mt-4">
                                            <div class="progress">
                                                <div class="progress-bar l-bg-c2" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                      </div>
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
                                        <option value = "" disabled selected class="text-blur">Akreditasi</option>
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
                                        <option value = "" disabled selected class="text-blur">Akreditasi</option>
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

                      <!-- Awal Modal Tampil Akreditasi-->
                        <div class="modal fade text-black" id="modalTampilakreditasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header text-primary">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Alternatif</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                  <table class="table border-0" style="font-size:10px;">
                                        <tr class="text-center text-primary">
                                            <th>No</th>
                                            <th>Nama PTS</th>
                                            <th>Akreditasi</th>
                                        </tr>                            
                                        <?php 
                                        include('koneksi.php');

                                          $no = 1;

                                          $tampil = mysqli_query($conn, "SELECT * FROM universitas ORDER BY id ASC");
                                          while($data = mysqli_fetch_array($tampil)) :
                                        ?>
                                        
                                        <tr class="text-center">
                                            <td><?= $no++ ?></td>
                                            <td><?=$data['nama']?></td>
                                            <td><?=$data['akreditasi']?></td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </table>
                              </div>
                            </div>
                          </div>
                        <!-- Akhir Modal Tambah-->

                        <!-- Awal Modal Tampil Beasiswa-->
                        <div class="modal fade text-black" id="modalTampilBeasiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header text-success">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Alternatif</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                  <table class="table border-0" style="font-size:10px;">
                                        <tr class="text-center text-success">
                                            <th>No</th>
                                            <th>Nama PTS</th>
                                            <th>Jumlah Beasiswa</th>
                                        </tr>                            
                                        <?php 
                                        include('koneksi.php');

                                          $no = 1;

                                          $tampil = mysqli_query($conn, "SELECT * FROM universitas ORDER BY id ASC");
                                          while($data = mysqli_fetch_array($tampil)) :
                                        ?>
                                        
                                        <tr class="text-center">
                                            <td><?= $no++ ?></td>
                                            <td><?=$data['nama']?></td>
                                            <td><?=$data['beasiswa']?></td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </table>
                              </div>
                            </div>
                          </div>
                        <!-- Akhir Modal Tambah Beasiswa-->

                        <!-- Awal Modal Tampil Biaya-->
                        <div class="modal fade text-black" id="modalTampilBiaya" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header text-danger">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Alternatif</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                  <table class="table border-0" style="font-size:10px;">
                                        <tr class="text-center text-danger">
                                            <th>No</th>
                                            <th>Nama PTS</th>
                                            <th>Biaya Persemeter</th>
                                        </tr>                            
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
                        <!-- Akhir Modal Tambah Biaya-->

                        <!-- Awal Modal Tampil -->
                        <div class="modal fade text-black" id="modalTampilFasilitas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header text-warning">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Alternatif</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                  <table class="table border-0" style="font-size:10px;">
                                        <tr class="text-center text-warning">
                                            <th>No</th>
                                            <th>Nama PTS</th>
                                            <th>Fasilitas</th>
                                        </tr>                            
                                        <?php 
                                        include('koneksi.php');

                                          $no = 1;

                                          $tampil = mysqli_query($conn, "SELECT * FROM universitas ORDER BY id ASC");
                                          while($data = mysqli_fetch_array($tampil)) :
                                        ?>
                                        
                                        <tr class="text-center">
                                            <td><?= $no++ ?></td>
                                            <td><?=$data['nama']?></td>
                                            <td><?=$data['fasilitas']?></td>           
                                        </tr>
                                        <?php endwhile; ?>
                                    </table>
                              </div>
                            </div>
                          </div>
                        <!-- Akhir Modal Tambah Fasilitas-->


                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>