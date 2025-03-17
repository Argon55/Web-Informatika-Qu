<?php
session_start();
require_once "fungsi_user.php";

//jika user belum login
if ( !isset($_SESSION['email']) ){
        header('location: login.php');
    }

?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <title>Data Kriteria Informatika-Qu</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/card.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-light text-black">
    
        <div class="container">

          <div class="mt-5">
            <h3 class="text-center">DATA KRITERIA INFORMATIKA-QU</h3>
          </div>

          <div class="row mt-5 border-0 shadow-lg p-3 bg-body rounded">
            <div class="card-body">
            
              <table class="table table-bordered table-striped table-hover" id="datatablesSimple" style="color:#0D8D91;">
                <thead>
                  <tr class="text-center" style="background-color:#20B2AA;">              
                    <th><i class="fa-solid fa-medal pe-2"></i>C1 (Akreditasi)</th>
                    <th><i class="fa-solid fa-file-invoice-dollar pe-2"></i>C2 (Beasiswa)</th>
                    <th><i class="fa-solid fa-dollar-sign pe-2"></i>C3 (Biaya Kuliah)</th>
                    <th><i class="fa-solid fa-computer pe-2"></i>C4 (Fasilitas)</th>
                  </tr>
                </thead>
                  <tr class="text-center" style="color:#0D8D91;">
                    <td>Tanpa Akreditasi (1)</td>
                    <td><= 5 Beasiswa (1)</td>
                    <td>> Rp .16.000.000,- (1)</td>
                    <td>Sangat Kurang (1)</td>
                  </tr>

                  <tr class="text-center" style="color:#0D8D91;">
                    <td>Minimum (2)</td>
                    <td>6 sampai 8 Beasiswa (2)</td>
                    <td>Rp. 13.000.000,- sampai Rp. 15.999.999,- (2)</td>
                    <td>Kurang (2)</td>
                  </tr>

                  <tr class="text-center" style="color:#0D8D91;">
                    <td>Baik/C (3)</td>
                    <td>9 sampai 11 Beasiswa (3)</td>
                    <td>Rp. 10.000.000,- sampai Rp. 12.999.999,- (3)</td>
                    <td>Standart (3)</td>
                  </tr>

                  <tr class="text-center" style="color:#0D8D91;">
                    <td>Baik Sekali/B (4)</td>
                    <td>12 sampai 15 Beasiswa (4)</td>
                    <td>Rp. 7.000.000,- sampai Rp. 9.999.999,- (4)</td>
                    <td>Lengkap (4)</td>
                  </tr>

                  <tr class="text-center" style="color:#0D8D91;">
                    <td>Unggul/A (5)</td>
                    <td>> 15 Beasiswa (5)</td>
                    <td>Rp. 0,- sampai Rp. 6.999.999,- (5)</td>
                    <td>Sangat Lengkap (5)</td>
                  </tr>                                           
              </table>
              <a href="dashboard_admin.php"><button class="btn btn-dark">Kembali</button></a>
            </div>


          
          </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="js/datatables-simple-demo1.js"></script>
    </body>
</html>