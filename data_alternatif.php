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
        <title>Data Alternatif Informatika-Qu</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/card.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-light text-black">
    
        <div class="container">

          <div class="mt-3">
            <h3 class="text-center">DATA ALTERNATIF PTS INFORMATIKA-QU</h3>
          </div>

          <div class="card mt-3 border-0 shadow-lg p-3 bg-body rounded">
            <div class="card-header" style="background-color:#20B2AA;">
                <center class="fw-bold">
                    <i class="fa-solid fa-graduation-cap"></i>
                    Data Alternatif Perguruan Tinggi Swasta
                </center>
            </div>
            <div class="card-body">

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                Tambah Data
              </button>
                
              <table id="datatablesSimple" style="color:#0D8D91;">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Universitas</th>
                    <th>Akreditasi</th>
                    <th>Jumlah Beasiswa</th>
                    <th>Biaya</th>
                    <th>Fasilitas</th>
                    <th>Aksi</th>
                  </tr>
                </thead>    

                <?php 
                include('koneksi.php');

                  $no = 1;

                  $tampil = mysqli_query($conn, "SELECT * FROM universitas ORDER BY id ASC");
                  while($data = mysqli_fetch_array($tampil)) :
                ?>
                
                  <tr style="color:#0D8D91;">
                    <td><?= $no++ ?></td>
                    <td><?=$data['nama']?></td>
                    <td><?=$data['akreditasi_prodi']?></td>
                    <td class="text-center"><?=$data['beasiswa']?></td>
                    <td><?=$data['biaya']?></td>
                    <td><?=$data['fasilitas']?></td>
                    <td>
                      <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $no ?>">Edit</a>
                      <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $no ?>">Hapus</a>
                    </td>
                  </tr>

                    <!-- Awal Modal Edit-->
                    <div class="modal fade text-dark" id="modalEdit<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Universitas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <!-- <form method="POST" action="cobaan.php">
                            <input type="hidden" name="id" value="<?=$data['id']?>">
                            <div class="modal-body">
                            
                              <div class="mb-3">
                                <label class="form-label">Nama Universitas</label>
                                <input type="text" class="form-control" name="tnama" value="<?= $data['nama']?>" placeholder="Masukan nama universitas!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Akreditasi</label>
                                <select class="form-select" name="takreditasi">
                                  <option value="<?= $data['akreditasi']?>"><?= $data['akreditasi']?></option>
                                  <option value="Tanpa Akreditasi">Tanpa Akreditasi</option>
                                  <option value="Minimum">Minimum</option>
                                  <option value="Baik">Baik</option>
                                  <option value="Baik Sekali">Baik Sekali</option>
                                  <option value="Unggul">Unggul</option>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Beasiswa</label>
                                <input type="text" class="form-control" name="tbeasiswa" value="<?= $data['beasiswa']?>" placeholder="Masukan jumlah beasiswa yang tersedia!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Biaya</label>
                                <input type="text" class="form-control" name="tbiaya" value="<?= $data['biaya']?>" placeholder="Masukan biaya!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Fasilitas</label>
                                <select class="form-select" name="tfasilitas">
                                  <option value="<?= $data['fasilitas']?>"><?= $data['fasilitas']?></option>
                                    <option value="Sangat Kurang">Sangat Kurang</option>
                                    <option value="Kurang">Kurang</option>
                                    <option value="Cukup/Standart">Cukup/Standart</option>
                                    <option value="Lengkap">Lengkap</option>
                                    <option value="Sangat Lengkap">Sangat Lengkap</option>
                                </select>
                              </div>

                            </div>
                              
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name="bedit">Edit</button>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                            </div>
                          </form>   -->

                        </div>
                      </div>
                    </div>
                    <!-- Akhir Modal Edit-->

                    <!-- Awal Modal Delete-->
                    <div class="modal fade text-dark" id="modalDelete<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Delete Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form method="POST" action="aksi_universitas.php">
                            <input type="hidden" name="id" value="<?=$data['id']?>">
                            <div class="modal-body text-center">
                            
                              <h6 class="text-center">Apakah anda yakin akan menghapus data ini!<br></h6>
                                <span class="text-danger"><?=$data['nama']?></span>

                            </div>
                              
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name="bdelete">Ya, Hapus segera!</button>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                            </div>
                          </form>  

                        </div>
                      </div>
                    </div>
                    <!-- Akhir Modal Delete-->

                <?php endwhile; ?>

              </table>



              <!-- Awal Modal Tambah -->
              <div class="modal fade text-dark" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Pengguna</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="aksi_universitas.php">
                      <div class="modal-body">
                      
                              <div class="mb-3">
                                <label class="form-label">Nama Universitas</label>
                                <input type="text" class="form-control" name="tnama" placeholder="Masukan nama universitas!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Akreditasi</label>
                                  <select class="form-select" name="takreditasi">
                                    <option value = "" disabled selected>Akreditasi</option>
                                    <option value="Baik/C">Baik/C</option>
                                    <option value="Baik Sekali/B">Baik Sekali/B</option>
                                    <option value="Unggul/A">Unggul/A</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Beasiswa</label>
                                <input type="number" class="form-control" name="tbeasiswa" placeholder="Masukan jumlah beasiswa yang tersedia!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Biaya</label>
                                <input type="number" class="form-control" name="tbiaya" placeholder="Masukan biaya!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Fasilitas</label>
                                  <select class="form-select" name="tfasilitas">
                                    <option value = "" disabled selected>Fasilitas</option>
                                    <option value="Cukup/Standart">Cukup/Standart</option>
                                    <option value="Lengkap">Lengkap</option>
                                    <option value="Sangat Lengkap">Sangat Lengkap</option>
                                  </select>
                              </div>                          
                      </div>
                        
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                      </div>
                    </form>  

                  </div>
                </div>
              </div>
              <!-- Akhir Modal Tambah-->
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
