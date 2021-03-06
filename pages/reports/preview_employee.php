<?php
session_start();
require '../../conf/functions.php';

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
$result = query("SELECT * FROM tkaryawan");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Karyawan</title>
  <link rel="stylesheet" href="print.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
</head>

<body>
  <h1>Data Karyawan</h1>
  <a class="btn btn-primary mb-3" href="print_employee.php" target="_blank"><i class="fa fa-chart-bar"></i>Print Report</a>
  <table id="data">
    <tr>
      <th>No</th>
      <th>No. KTA</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Tanggal Masuk</th>
      <th>No. KTP</th>
      <th>No. NPWP</th>
      <th>No. EFIN</th>
      <th>No. BPJS KES</th>
      <th>No. BPJS TK</th>
      <th>No. KRK</th>
      <th>Alamat</th>
      <th>No. HP</th>
      <th>Email</th>
      <th>Lokasi Kerja</th>
      <th>Nama Istri</th>
      <th>Nama Anak 1</th>
      <th>Nama Anak 2</th>
      <th>Nama Anak 3</th>
      <th>Status Pajak</th>
      <th>Photo</th>
      <th>Photo KTP</th>
      <th>Photo NPWP</th>
      <th>Photo BPJS KIS</th>
      <th>Photo BPJS TK</th>
    </tr>
    <?php
    $i = 1;
    foreach ($result as $row) :
    ?>
      <tr>
        <td><?= $i++; ?> </td>
        <td><?= $row['no_kta']; ?> </td>
        <td><?= $row['nama']; ?> </td>
        <td><?= date('d-m-Y', strtotime($row["tanggal_lahir"])); ?> </td>
        <td><?= date('d-m-Y', strtotime($row["tanggal_masuk"])); ?> </td>
        <td><?= $row['no_ktp']; ?> </td>
        <td><?= $row['no_npwp']; ?> </td>
        <td><?= $row['no_efin']; ?> </td>
        <td><?= $row['no_bpjs_kes']; ?> </td>
        <td><?= $row['no_bpjs_tk']; ?> </td>
        <td><?= $row['no_krk']; ?> </td>
        <td><?= $row['alamat']; ?> </td>
        <td><?= $row['no_hp']; ?> </td>
        <td><?= $row['email']; ?> </td>
        <td><?= $row['lokasi_kerja']; ?> </td>
        <td><?= $row['nama_istri']; ?> </td>
        <td><?= $row['nama_anak_1']; ?> </td>
        <td><?= $row['nama_anak_2']; ?> </td>
        <td><?= $row['nama_anak_3']; ?> </td>
        <td><?= $row['status_pajak']; ?> </td>
        <td>
          <img src="../../images/ktp/<?= $row['foto_ktp']; ?> " alt="<?= $row['foto_ktp']; ?> " width="150" height="150">
        </td>
        <td>
          <img src="../../images/ktp/<?= $row['foto_ktp']; ?> " alt="<?= $row['foto_ktp']; ?> " width="150" height="150">
        </td>
        <td>
          <img src="../../images/npwp/<?= $row['foto_npwp']; ?> " alt="<?= $row['foto_npwp']; ?> " width="150" height="150">
        </td>
        <td>
          <img src="../../images/bpjs-kis/<?= $row['foto_bpjs_kis']; ?> " alt="<?= $row['foto_bpjs_kis']; ?> " width="150" height="150">
        </td>
        <td>
          <img src="../../images/bpjs-tk/<?= $row['foto_bpjs_tk']; ?> " alt="<?= $row['foto_bpjs_tk']; ?> " width="150" height="150">
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>