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
        <title>Dashboard Admin</title>
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
                <a href="#!"><h3 style="color:#145154;" class="text-center"><i class="fas fa-bars"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DASHBOARD ADMIN INFORMATIKA-QU</h3>
                </center>
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading fw-bold text-center" style="color:#20B2AA;">Admin Element</div>
                            <a class="nav-link fw-bold" href="#">
                                <div class="sb-nav-link-icon fw-bold"><i class="fas fa-tachometer-alt" style="color:#20B2AA;"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading fw-bold text-center" style="color:#20B2AA;">Kontrol Data</div>
                            <!-- <a class="nav-link fw-bold" href="data_user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-friends" style="color:#20B2AA;"></i></div>
                                Data Pengguna
                            </a> -->
                            <a class="nav-link fw-bold" href="data_kriteria.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sitemap" style="color:#20B2AA;"></i></div>
                                Data Kriteria
                            </a>
                            <a class="nav-link fw-bold" href="data_alternatif.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-graduation-cap" style="color:#20B2AA;"></i></div>
                                Data Alternatif PTS
                            </a>
                            <a class="nav-link fw-bold" href="bobot_alternatif.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-balance-scale" style="color:#20B2AA;"></i></div>
                                Data Bobot Alternatif
                            </a>
                            <div class="sb-sidenav-menu-heading fw-bold text-center" style="color:#20B2AA;">Profil</div>
                            <a class="nav-link fw-bold" href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user" style="color:#20B2AA;"></i></div>
                                Profil
                            </a>
                            <div class="sb-sidenav-menu-heading fw-bold text-center">
                                <a href="logout.php">
                                <button class="btn btn-out shadow-lg">
                                    <span class="text-danger fw-bold"><i class="fas fa-power-off  pe-1" style="color:#FF0000;" name="blogout"></i> Logout</span>
                                </button>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content" class="bg-light mt-5">
                <main>
                    <div class="container-fluid px-4 bg-light">
                        <div class="row">
                            <div class="col-xl-4">
                                <center>
                                <div class="card mt-4 shadow-lg p-3 bg-body rounded" style="width: 21rem;">
                                    <img src="assets/img/welcome.png" class="card-img-top" alt="...">
                                </div>
                                <center>
                            </div>
                            <div class="col-xl-4">
                                <center>
                                <div class="card mt-4 shadow-lg p-3 bg-body rounded" style="width: 21rem;">
                                    <img src="assets/img/penting.png" class="card-img-top" alt="...">
                                </div>
                                <center>
                            </div>
                            <div class="col-xl-4">
                                <center>
                                <div class="card mt-4 shadow-lg p-3 bg-body rounded" style="width: 21rem;">
                                    <img src="assets/img/kriteria.png" class="card-img-top" alt="...">
                                </div>
                                <center>
                            </div>
                            <div class="col-xl-12">
                                <div class="card mb-4  mt-3 shadow-lg p-3 bg-body rounded">
                                    <div class="card-header" style="background-color:#20B2AA;">
                                        <center class="fw-bold">
                                        <i class="fas fa-user-friends"></i>
                                        Update Data User
                                        </center>
                                    </div>
                                    <div class="card-body mt-3" style="color:#20B2AA;">
                                        <table id="datatablesSimple" style="color:#20B2AA;">
                                            <thead>
                                                <tr>                           
                                                    <th>Nama</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Asal Sekolah</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            
                                            <?php 
                                                include"koneksi.php";

                                                  $no = 1;

                                                  $tampil = mysqli_query($conn, "SELECT * FROM pengguna ORDER BY id DESC");
                                                  while($data = mysqli_fetch_array($tampil)) :
                                            ?>

                                                <tr>
                                                    <td><?=$data['namalengkap']?></td>
                                                    <td><?=$data['username']?></td>
                                                    <td><?=$data['email']?></td>
                                                    <td><?=$data['sekolah']?></td>
                                                    <td><?=$data['alamat']?></td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="footer small text-center text-dark-50"><div class="container px-4 px-lg-5">Copyright &copy; Argon Ganteng 2024</div>
                        </div>
                </footer>
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
