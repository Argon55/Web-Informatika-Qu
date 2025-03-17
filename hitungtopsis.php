<?php
session_start();
require_once "fungsi_user.php";
require_once "koneksi.php";

//jika user belum login
// if ( !isset($_SESSION['email']) ){
//         header('location: login.php');
//     }


// BOBOT
    $W1 = $_POST['akreditasipts'];
    $W2 = $_POST['akreditasiprodi'];
    $W3 = $_POST['beasiswa'];
    $W4 = $_POST['biaya'];
    $W5 = $_POST['fasilitas']; 

//Pembagi Normalisasi
function pembagiNM($matrik){
  for($i=0;$i<5;$i++){
    $pangkatdua[$i] = 0;
    for($j=0;$j<sizeof($matrik);$j++){
      $pangkatdua[$i] = $pangkatdua[$i] + pow($matrik[$j][$i],2);}
    $pembagi[$i] = sqrt($pangkatdua[$i]);
  }
  return $pembagi;
}

//Normalisasi
function Transpose($squareArray) {

    if ($squareArray == null) { return null; }
    $rotatedArray = array();
    $r = 0;

    foreach($squareArray as $row) {
        $c = 0;
        if (is_array($row)) {
            foreach($row as $cell) { 
                $rotatedArray[$c][$r] = $cell;
                ++$c;
            }
        }
        else $rotatedArray[$c][$r] = $row;
        ++$r;
    }
    return $rotatedArray;
}

function JarakIplus($aplus,$bob){
  for ($i=0;$i<sizeof($bob);$i++) {
    $dplus[$i] = 0;
    for($j=0;$j<sizeof($aplus);$j++){
      $dplus[$i] = $dplus[$i] + pow(($aplus[$j] - $bob[$i][$j]),2);
    }
    $dplus[$i] = round(sqrt($dplus[$i]),4);
  }
  return $dplus;
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <title>Hasil Perhitungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <link href="css/styles.css" rel="stylesheet" />
        <link href="css/card.css" rel="stylesheet" />
  </head>

  <body class="bg-light text-black">
    <!-- Awal Container -->
    <div class="container">

      <div class="mt-5">
        <h3 class="text-center text-primary">REKOMENDARI INFORMATIKA-QU BERDASARKAN</h3>
        <h3 class="text-center">HASIL PERHITUNGAN</h3>
      </div>

      <!-- Awal Matrik Keputusan -->
      <div class="card mt-5 shadow-lg p-3 bg-body rounded">
        <div class="card-header l-bg-c2 fw-bold">
          MATRIKS KEPUTUSAN
        </div>
        <div class="card-body text-dark">
            <table class="table table-responsive table-bordered table-striped table-hover table-sm" style="color:#20B2AA;">
              <tr>
                <th style="color:#20B2AA;"><center>Alternatif</center></th>
                <th style="color:#20B2AA;"><center>C1 (Benefit)</center></th>
                <th style="color:#20B2AA;"><center>C2 (Benefit)</center></th>
                <th style="color:#20B2AA;"><center>C3 (Benefit)</center></th>
                <th style="color:#20B2AA;"><center>C4 (Cost)</center></th>
                <th style="color:#20B2AA;"><center>C5 (Benefit)</center></th>
              </tr>              

              <?php
                $query=mysqli_query($conn,"SELECT * FROM universitas");
                      $no=1;
                      while ($universitas=mysqli_fetch_array($query)) {
                        $Matrik[$no-1]=array($universitas['c1'],$universitas['c2'],$universitas['c3'],$universitas['c4'],$universitas['c5'] );
              ?>
              <tbody>
              <tr>
                <td style="color:#20B2AA;"><center><?php echo "A",$no ?></center></td>
                <td style="color:#20B2AA;"><center><?php echo $universitas['c1'] ?></center></td>
                <td style="color:#20B2AA;"><center><?php echo $universitas['c2'] ?></center></td>
                <td style="color:#20B2AA;"><center><?php echo $universitas['c3'] ?></center></td>
                <td style="color:#20B2AA;"><center><?php echo $universitas['c4'] ?></center></td>
                <td style="color:#20B2AA;"><center><?php echo $universitas['c5'] ?></center></td>
                
              </tr>
              </tbody>
              <?php
              $no++;
            }
            ?>
              
            </table>

        </div>
      </div>
      <!-- Akhir Matriks Keputusan -->

      <!-- Awal Matrik Ternormalisasi -->
      <div class="card mt-5">
        <div class="card-header l-bg-c2">
          MATRIKS TERNORMALISASI (R)
        </div>
        <div class="card-body text-dark">
          <table class="table table-responsive table-bordered table-striped table-hover table-sm" style="color:#20B2AA;">
              <tr>
                <th><center>Alternatif</center></th>
                <th><center>C1 (Benefit)</center></th>
                <th><center>C2 (Benefit)</center></th>
                <th><center>C3 (Benefit)</center></th>
                <th><center>C4 (Cost)</center></th>
                <th><center>C5 (Benefit)</center></th>
              </tr>
                  <?php
                      $query=mysqli_query($conn,"SELECT * FROM universitas");
                      $no=1;
                      $pembagiNM=pembagiNM($Matrik);
                      while ($universitas=mysqli_fetch_array($query)) {

                        $MatrikNormalisasi[$no-1]=array($universitas['c1']/$pembagiNM[0],
                          $universitas['c2']/$pembagiNM[1],
                          $universitas['c3']/$pembagiNM[2],
                          $universitas['c4']/$pembagiNM[3],
                          $universitas['c5']/$pembagiNM[4]);

                          ?>
                          <tr>
                            <td><center><?php echo "A",$no ?></center></td>
                            <td><center><?php echo round($universitas['c1']/$pembagiNM[0],10)?></center></td>
                            <td><center><?php echo round($universitas['c2']/$pembagiNM[1],10) ?></center></td>
                            <td><center><?php echo round($universitas['c3']/$pembagiNM[2],10) ?></center></td>
                            <td><center><?php echo round($universitas['c4']/$pembagiNM[3],10) ?></center></td>
                            <td><center><?php echo round($universitas['c5']/$pembagiNM[4],10) ?></center></td>
                          </tr>
                          <?php
                          $no++;
                        }
                        ?>
              
            </table>

        </div>
      </div>
      <!-- Akhir Matriks Ternormalisasi -->


      <!-- Awal Bobot (W) -->
      <div class="card mt-5">
        <div class="card-header l-bg-c2">
          BOBOT (W)
        </div>
        <div class="card-body">
          <table class="table table-responsive table-bordered table-striped table-hover" style="color:#20B2AA;">
            <tr>
              <th><center>Value Kriteria Akreditasi PTS</center></th>
              <th><center>Value Kriteria Akreditasi Prodi</center></th>
              <th><center>Value Kriteria Beasiswa</center></th>
              <th><center>Value Kriteria Biaya</center></th>
              <th><center>Value Kriteria Fasilitas</center></th>
            </tr>
            <tr>
              <td><center><?php echo($W1);?></center></td>
              <td><center><?php echo($W2);?></center></td>
              <td><center><?php echo($W3);?></center></td>
              <td><center><?php echo($W4);?></center></td>
              <td><center><?php echo($W5);?></center></td>
            </tr>
          </table>  
        </div>
      </div>
      <!-- Akhir Bobot (W) -->

      <!-- Awal Matrik Ternormalisasi Terbobot (Y) -->
      <div class="card mt-5">
        <div class="card-header l-bg-c2">
          MATRIK NORMALISASI TERBOBOT (Y)
        </div>
        <div class="card-body text-dark">
          <table class="table table-responsive table-bordered table-striped table-hover table-sm" id="#" style="color:#20B2AA;">
            <tr>
                <th><center>Alternatif</center></th>
                <th><center>C1 (Benefit)</center></th>
                <th><center>C2 (Benefit)</center></th>
                <th><center>C3 (Benefit)</center></th>
                <th><center>C4 (Cost)</center></th>
                <th><center>C5 (Benefit)</center></th>
            </tr>

                  <?php
                        $query=mysqli_query($conn,"SELECT * FROM universitas");
                        $no=1;
                        $pembagiNM=pembagiNM($Matrik);
                        while ($universitas=mysqli_fetch_array($query)) {
                          
                          $NormalisasiBobot[$no-1]=array(
                            $MatrikNormalisasi[$no-1][0]*$W1,
                            $MatrikNormalisasi[$no-1][1]*$W2,
                            $MatrikNormalisasi[$no-1][2]*$W3,
                            $MatrikNormalisasi[$no-1][3]*$W4,
                            $MatrikNormalisasi[$no-1][4]*$W5);
                  ?>

            <tr>
              <td><center><?php echo "A",$no ?></center></td>
              <td><center><?php echo round($MatrikNormalisasi[$no-1][0]*$W1,9) ?></center></td>
              <td><center><?php echo round($MatrikNormalisasi[$no-1][1]*$W2,9) ?></center></td>
              <td><center><?php echo round($MatrikNormalisasi[$no-1][2]*$W3,9) ?></center></td>
              <td><center><?php echo round($MatrikNormalisasi[$no-1][3]*$W4,9) ?></center></td>
              <td><center><?php echo round($MatrikNormalisasi[$no-1][4]*$W5,9) ?></center></td>
            </tr>

            <?php
            $no++;
          }
          ?>
          </table>
        </div>
      </div>
      <!-- Akhir Matriks Ternormalisasi Terbobot (Y) -->

      <!-- Awal Matrik Solusi ideal positif dan negatif-->
      <div class="card mt-5">
        <div class="card-header l-bg-c2">
          SOLUSI IDEAL POSITIF "A+" DAN SOLUSI IDEAL NEGATIF "A-"
        </div>
        <div class="card-body">
          <table class="table table-responsive table-bordered table-striped table-hover table-sm display responsive nowrap" id="myTable2" style="color:#20B2AA;">
            <tr>
                <th><center>Alternatif</center></th>
                <th><center>C1 (Benefit)</center></th>
                <th><center>C2 (Benefit)</center></th>
                <th><center>C3 (Benefit)</center></th>
                <th><center>C4 (Cost)</center></th>
                <th><center>C5 (Benefit)</center></th>
            </tr>
            <?php
            $NormalisasiBobotTrans = Transpose($NormalisasiBobot);
            ?>

            <tr>
                <?php  
                $idealpositif=array(max($NormalisasiBobotTrans[0]),max($NormalisasiBobotTrans[1]),max($NormalisasiBobotTrans[2]),min($NormalisasiBobotTrans[3]),max($NormalisasiBobotTrans[4]));
                ?>
            
              <td><center><?php echo "Y+" ?> </center></td>
              <td><center><?php echo(round(max($NormalisasiBobotTrans[0]),10));?>&nbsp(min)</center></td>
              <td><center><?php echo(round(max($NormalisasiBobotTrans[1]),10));?>&nbsp(max)</center></td>
              <td><center><?php echo(round(max($NormalisasiBobotTrans[2]),10));?>&nbsp(max)</center></td>
              <td><center><?php echo(round(min($NormalisasiBobotTrans[3]),10));?>&nbsp(max)</center></td>
              <td><center><?php echo(round(max($NormalisasiBobotTrans[4]),10));?>&nbsp(max)</center></td>
            </tr>  

            <tr>
              <?php  
              $idealnegatif=array(min($NormalisasiBobotTrans[0]),min($NormalisasiBobotTrans[1]),min($NormalisasiBobotTrans[2]),max($NormalisasiBobotTrans[3]),min($NormalisasiBobotTrans[4]));
              ?>
              <td><center><?php echo "Y-" ?> </center></td>
              <td><center><?php echo(round(min($NormalisasiBobotTrans[0]),10));?>&nbsp(max)</center></td>
              <td><center><?php echo(round(min($NormalisasiBobotTrans[1]),10));?>&nbsp(min)</center></td>
              <td><center><?php echo(round(min($NormalisasiBobotTrans[2]),10));?>&nbsp(min)</center></td>
              <td><center><?php echo(round(max($NormalisasiBobotTrans[3]),10));?>&nbsp(min)</center></td>
              <td><center><?php echo(round(min($NormalisasiBobotTrans[4]),10));?>&nbsp(min)</center></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- Akhir Matrik Solusi ideal positif dan negatif -->

      <!-- Awal Jarak antara nilai terbobot setiap alternatif terhadap solusi ideal positif dan negatif -->
      <div class="card mt-5">
        <div class="card-header l-bg-c2">
          JARAK ANTARA NILAI SETIAP ALTERNATIF TERHADAP SOLUSI IDEAL POSITIF "D+" DAN SOLUSI IDEAL NEGATIF "D-"
        </div>
        <div class="card-body">
          <table class="table table-responsive table-bordered table-striped table-hover table-sm display responsive nowrap" id="DataTable" style="color:#20B2AA;">
            <tr>
              <th><center>D+</center></th>
              <th><center>Nilai</center></th>
              <th><center>D-</center></th>
              <th><center>Nilai</center></th>
            </tr>

            <?php
              $query=mysqli_query($conn,"SELECT * FROM universitas");
              $no=1;
              $Dplus=JarakIplus($idealpositif,$NormalisasiBobot);
              $Dmin=JarakIplus($idealnegatif,$NormalisasiBobot);
              while ($universitas=mysqli_fetch_array($query)) {

            ?>

            <tr>
              <td><center><?php echo "D",$no ?></center></td>
              <td><center><?php echo round($Dplus[$no-1],10) ?></center></td>
              <td><center><?php echo "D",$no ?></center></td>
              <td><center><?php echo round($Dmin[$no-1],10) ?></center></td>
            </tr>

            <?php
              $no++;

            }
            ?>

          </table>

        </div>
      </div>
      <!-- Akhir Jarak antara nilai terbobot setiap alternatif terhadap solusi ideal positif dan negatif -->

      <!-- Awal Nilai Preferensi untuk Setiap alternatif (V) -->
      <div class="card mt-5">
        <div class="card-header l-bg-c2">
          NILAI PREFERENSI (V)
        </div>
        <div class="card-body">
          <table class="table table-responsive table-bordered table-striped table-hover table-sm" id="datatablesSimple" style="color:#20B2AA;">
            <thead>
            <tr>
              <th><center>Nilai Preferensi "V"</center></th>
              <th><center>Nilai</center></th>
              <th><center>NAMA PTS</center></th>
            </tr>
            </thead>
                    <?php
                          $query=mysqli_query($conn,"SELECT * FROM universitas");
                          $no=1;
                          $nilaiV = array();
                          while ($universitas=mysqli_fetch_array($query)) {
                            
                            array_push($nilaiV, $Dmin[$no-1]/($Dmin[$no-1]+$Dplus[$no-1]));
                            ?>
                            <tr>
                              <td><center><?php echo "V",$no ?></center></td>
                              <td><center><?php echo $Dmin[$no-1]/($Dmin[$no-1]+$Dplus[$no-1]); ?></center></td>
                              <td><?php echo $universitas['nama']; ?></td>
                            </tr>
                            <?php
                            $no++;
                          }

                          ?>

          </table>
        </div>
      </div>
      <!-- Akhir Nilai Preferensi untuk Setiap alternatif (V) -->

      <!-- Awal Nilai Preferensi Teringgi -->
      <div class="card mt-5">
        <div class="card-header l-bg-c2 text-white">
          ALTERNATIF PILIHAN YANG DIREKOMENDASIKAN OLEH SISTEM
        </div>
        <div class="card-body">
          <table class="table table-responsive table-bordered table-striped table-hover" style="color:#20B2AA;">
            <tr class="text-white">
              <th><center>Alternatif Nilai Preferensi tertinggi</center></th>
              <th><center>Nilai</center></th>
              <th><center>Alternatif PTS terpilih</center></th>
            </tr>

             <tr>
                 <?php
                            $testmax = max($nilaiV);
                            for ($i=0; $i < count($nilaiV); $i++) { 
                              if ($nilaiV[$i] == $testmax) {
                                $query=mysqli_query($conn,"SELECT * FROM universitas where id = $i+1");
                                ?>
                                <td><center><?php echo "V".($i+1); ?></center></td>
                                <td><center><?php echo $nilaiV[$i]; ?></center></td>
                                <?php while ($universitas=mysqli_fetch_array($query)) { ?>
                                <td><center><?php echo $universitas['nama']; ?></center></td>
                                <?php
                              }
                            }
                          } ?>
                        </tr>

          </table>


        </div>
      </div>
      <!-- Akhir Nilai Preferensi Teringgi -->

    </div>
    <!-- Akhir Container -->

    <div class="text-center mb-4 mt-3">
      <a href="index.php"><button class="btn btn-primary btn-lg mb-4">SELESAI</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script>
          $(document).ready( function () {
            $('#myTable').DataTable();
          });
        </script>

        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="js/data-table.js"></script>
  </body>
</html>