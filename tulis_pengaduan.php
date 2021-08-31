<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <div class="card shadow">
        <div class="card-header">
            Tulis Pengaduan
        </div>
        <div class="card-body">
            <form action="simpan-pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group cols-sm-6">
                    <label>Tanggal Pengaduan</label>
                    <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/Y'); ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>NIK</label>
                    <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Laporan</label>
                    <textarea class="form-control" rows="3" name="isi_laporan"></textarea>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Unggah Foto</label>
                    <input type="file" name="foto" value="" class="form-control" accept=".jpg, .jpeg, .png, .gif"><font color="red">*Tipe Yang Bisa Di Upload Adalah : .jpg, .jpeg, .png, .gif</font>
                </div>
                <div class="form-group cols-sm-6">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <input type="reset" value="Kosongkan" class="btn btn-secondary">
                </div>
            </form>
        </div>
    </div>

<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>