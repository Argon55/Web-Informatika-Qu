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
        <title>Data User Informatika-Qu</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/card.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-light text-black">
    
        <div class="container">

          <div class="mt-3">
            <h3 class="text-center">DATA USER INFORMATIKA-QU</h3>
          </div>

          <div class="card mt-3 border-0 shadow-lg p-3 bg-body rounded">
            <div class="card-header" style="background-color:#20B2AA;">
                <center class="fw-bold">
                    <i class="fas fa-user-friends"></i>
                    Data User
                </center>
            </div>
            <div class="card-body border-0">

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                Tambah Data
              </button>
                
              <table id="datatablesSimple" style="color:#0D8D91;" >
                <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Lengkap</th>
                      <th>Email</th>
                      <th>Asal Sekolah</th>
                      <th>Alamat</th>
                      <th>Nomor Whatsapp</th>
                      <th>Aksi</th>
                    </tr>
                </thead>

                <?php 
                include"koneksi.php";

                  $no = 1;

                  $tampil = mysqli_query($conn, "SELECT * FROM pengguna ORDER BY id DESC");
                  while($data = mysqli_fetch_array($tampil)) :
                ?>
                
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?=$data['namalengkap']?></td>
                    <td><?=$data['email']?></td>
                    <td><?=$data['sekolah']?></td>
                    <td><?=$data['alamat']?></td>
                    <td><?=$data['whatsapp']?></td>
                    <td>
                      <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $no ?>">Edit</a>
                      <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $no ?>">Hapus</a>
                    </td>
                  </tr>

                    <!-- Awal Modal Edit-->
                    <div class="modal fade text-dark" id="modalEdit<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#20B2AA;">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data user</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                              <form method="POST" action="aksi_user.php">
                            <input type="hidden" name="id" value="<?=$data['id']?>">
                            <div class="modal-body">
                            
                              <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="tnamalengkap" value="<?= $data['namalengkap']?>" placeholder="Masukan nama lengkap!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" name="tusername" value="<?= $data['username']?>" placeholder="Masukan username!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="temail" value="<?= $data['email']?>" placeholder="Masukan email!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Asal Sekolah</label>
                                <input type="text" class="form-control" name="tsekolah" value="<?= $data['sekolah']?>" placeholder="Masukan nama sekolah asal!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="talamat" value="<?= $data['alamat']?>" placeholder="Masukan alamat!">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="tstatus">
                                  <option value="<?= $data['level']?>"><?= $data['level']?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                              </div>

                            </div>
                              
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name="bedit">Edit</button>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                            </div>
                          </form>   

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
                          <form method="POST" action="aksi_user.php">
                            <input type="hidden" name="id" value="<?=$data['id']?>">
                            <div class="modal-body text-center">
                            
                              <h6 class="text-center">Apakah anda yakin akan menghapus data ini!<br></h6>
                                <span class="text-danger"><?=$data['namalengkap']?></span>

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
                    <form method="POST" action="aksi_user.php">
                      <div class="modal-body">
                      
                        <div class="mb-3">
                          <label class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" name="tnamalengkap" placeholder="Masukan nama lengkap!">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Username</label>
                          <input type="text" class="form-control" name="tusername" placeholder="Masukan username!">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="text" class="form-control" name="tpass" placeholder="Masukan password!">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Asal Sekolah</label>
                          <input type="text" class="form-control" name="tsekolah" placeholder="Masukan nama sekolah asal!">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Alamat</label>
                          <textarea class="form-control" name="talamat" rows="3" placeholder="Kabupaten/Kota, Provinsi!"></textarea>
                        </div>
                          <div class="mb-3">
                          <label class="form-label">Status</label>
                          <select class="form-select" name="tstatus">
                            <option></option>
                            <option value="user">0</option>
                            <option value="admin">1</option>
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
