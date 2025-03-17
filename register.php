<?php
session_start();
require_once "fungsi_user.php";

//jika user sudah login
if ( isset($_SESSION['email']) ){
        header('location: action_login.php');
    }


//Validasi Register
if ( isset($_POST['register'])) {
  $namalengkap =  $_POST['rnamalengkap'];
  $email = $_POST['remail'];
  $password = $_POST['rpassword']; 
  $pendidikan = $_POST['rpendidikan'];
  $sekolah = $_POST['rsekolah'];
  $whatsapp = $_POST['rwhatsapp'];

    if (!empty(trim($namalengkap)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($pendidikan)) && !empty(trim($sekolah)) && !empty(trim($whatsapp)) ) {
    
      if (register_cek_nama($namalengkap) ) {

        //memasukan kedalam database
        if (register_user($namalengkap, $email, $password, $pendidikan, $sekolah, $whatsapp) ) {
            echo "<script>
            alert('Register Berhasil!');
            document.location='login.php';
            </script>";
        } else {
          echo "<script>
            alert('Register GAGAL!');
            document.location='register.php';
            </script>";
        }

      } else {
      echo "<script>
            alert('Register GAGAL! Nama sudah digunakan');
            document.location='register.php';
            </script>";
      }
    } 
  }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-9/assets/css/login-9.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <section class="bg-light py-3 py-md-5 py-xl-8">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-12 col-md-6 col-xl-7">
            <div class="card border-2 rounded-4 shadow-lg p-3 bg-body rounded" style="color:#0D8D91;">
              <div class="card-body p-3 p-md-4 p-xl-5">
                <div class="row">
                  <div class="col-12">
                    <div class="mb-4">
                      <h3>Register</h3>
                      <p>Register immediately and find out more excitement!!!</p>
                    </div>
                  </div>
                </div>
                <form action="register.php" method="POST">
                  <div class="row gy-3 overflow-hidden">
                    <div class="col-12">
                      <div class="form-floating mb-3">                        
                        <input type="text" class="form-control" name="rnamalengkap" id="namalengkap" placeholder="nama lengkap" required>
                        <label for="namalengkap" class="form-label">Full Name</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="remail" id="email" placeholder="email" required>
                        <label for="email" class="form-label">Email</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="rpassword" id="password" placeholder="Password" required>
                        <label for="password" class="form-label">Password</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="rkonfirmasipassword" id="password" placeholder="Password" required>
                        <label for="password" class="form-label">Konfirmasi Password</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <!-- <input type="text" class="form-control" name="rpendidikan" id="pendidikan" placeholder="pendidikan" required> -->
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <select class="form-select" name="rpendidikan" id="pendidikan" placeholder="pendidikan" required>
                          <option></option>
                          <option>Sekolah Menengah Atas Negeri</option>
                          <option>Sekolah Menengah Atas Swasta</option>
                          <option>madrasah Aliyah Negeri</option>
                          <option>madrasah Aliyah Swasta</option>
                          <option>Sekolah Menengah Kejurusan Negeri</option>
                          <option>Sekolah Menengah Kejurusan Swasta</option>
                          <option>Lainnya</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="rsekolah" id="sekolah" placeholder="sekolah" required>
                        <label for="sekolah" class="form-label">Asal Sekolah</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="rwhatsapp" id="whatsapp" placeholder="Password" required>
                        <label for="whatsapp" class="form-label">Nomor Whatsapp</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button class="btn btn-primary btn-lg" type="submit" name="register">Register</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>  
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-5">
            <div class="d-flex justify-content-center text-white">
              <div class="col-12 col-xl-9">     
                <h1 class="h1 mb-3" style="color:#20B2AA;">Have account?</h1>     
                <h2 class="h2 mb-4" style="color:#20B2AA;">Log in to start activities again!</h2>
                <a href="login.php"><button class="btn btn-success btn-lg mb-4" type="submit">Log in</button></a>
                <div class="text-endx">
                  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16" style="color:#20B2AA;">
                    <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>