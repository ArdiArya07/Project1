<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
            <h4 class="m-0 font-weight-bold text-primary" align="center">Data Tanggapan Aplikasi Layanan Pengaduan Masyarakat</h4>
            <h6 class="m-0 font-weight-bold text-primary" align="center">Tahun 2020 - 2021</h6><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Tanggal Tanggapan</th>
                        <th>ID Tanggapan</th>
                        <th>Tanggapan</th>
                        <th>ID Pengaduan</th>
                        <th>ID Petugas</th>
                    </tr>
                  <?php
                  require '../koneksi.php';
                  $sql = mysqli_query($conf, "SELECT * FROM tanggapan");
                  $no = 1;
                  while ($data = mysqli_fetch_array($sql)) {
                  ?>
                  <tbody>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data['tgl_tanggapan']; ?></td>
                        <td><?php echo $data['id_tanggapan']; ?></td>
                        <td><?php echo $data['tanggapan']; ?></td>
                        <td><?php echo $data['id_pengaduan']; ?></td>
                        <td><?php echo $data['id_petugas']; ?></td>
                    </tr>
                  </tbody>
                  <?php
                  $no++;
                  }
                  ?>
                </table>
              </div>
              <br><br>
              <h6 class="m-0 font-weight-bold text-primary" align="right">Malang, <?php echo date('d M Y'); ?></h6>
              <h6 class="m-0 font-weight-bold text-primary" align="right">Petugas </h6><br><br><br>
              <h6 class="m-0 font-weight-bold text-primary" align="right"><?php echo $_SESSION['nama']; ?> </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">window.print();</script>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/sb-admin-2.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../js/demo/datatables-demo.js"></script>
</body>
</html>
