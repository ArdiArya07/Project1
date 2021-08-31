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
</head>
<body id="page-top">
    <div class="card shadow">
        <div class="card-header">
            Detail Pengaduan
        </div>
        <div class="card-body">
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <?php
            require '../koneksi.php';
            $sql = mysqli_query($conf, "SELECT * FROM pengaduan WHERE id_pengaduan='$_GET[id]'");
            $data = mysqli_fetch_array($sql);
            if ($sql) {
            ?>
                <div class="form-group cols-sm-6">
                    <label>Tanggal Pengaduan</label>
                    <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>NIK</label>
                    <input type="text" name="nik" value="<?php echo $data['nik']; ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Laporan</label>
                    <textarea class="form-control" rows="3" name="isi_laporan" readonly><?php echo $data['isi_laporan']; ?></textarea>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Foto</label>
                    <div>
                        <img src="../images/<?php echo $data['foto']; ?>" width=700>
                    </div>
                </div>
                <div class="form-group cols-sm-6">
                    <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>
                    <a href="proses.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-success btn-icon-split" onclick="return confirm('Apakah Anda Yakin.. ?')">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Verifikasi</span>
                    </a>
                </div>
            <?php
            }
            ?>
            </form>
        </div>
    </div>

<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/sb-admin-2.min.js"></script>
</body>
</html>