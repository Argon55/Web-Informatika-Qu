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
        <title>Bobot Alternatif Informatika-Qu</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/card.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-light text-black">
    
        <div class="container">

          <div class="mt-3">
            <h3 class="text-center">DATA BOBOT ALTERNATIF INFORMATIKA-QU</h3>
          </div>

          <div class="card mt-3 border-0 shadow-lg p-3 bg-body rounded">
            <div class="card-header" style="background-color:#20B2AA;">
                <center class="fw-bold">
                    <i class="fa-solid fa-balance-scale"></i>
                    Bobot Alternatif
                </center>
            </div>
            <div class="card-body mt-3">
                
              <table id="datatablesSimple" style="color:#0D8D91;">
                <thead>
                    <tr>
                      <th>Alternatif</th>
                      <th>Nama Universitas</th>
                      <th>C1</th>
                      <th>C2</th>
                      <th>C3</th>
                      <th>C4</th>
                    </tr>
                </thead>
                <?php 
                            include('koneksi.php');

                              $no = 1;

                              $tampil = mysqli_query($conn, "SELECT * FROM universitas ORDER BY id ASC");
                              while($data = mysqli_fetch_array($tampil)) :
                            ?>
                            
                              <tr style="color:#0D8D91;">
                                <td>A<?= $no++ ?></td>
                                <td><?=$data['nama']?></td>
                                <td><?=$data['c1']?></td>
                                <td><?=$data['c2']?></td>
                                <td><?=$data['c3']?></td>
                                <td><?=$data['c4']?></td>
                              </tr>

                            <?php endwhile; ?>

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
    </body>
</html>
