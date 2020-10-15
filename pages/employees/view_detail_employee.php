<?php
// ? Get data from URL
$id = $_GET["id"];

// ? Query data Mahasiswa based on id
$employee = query("SELECT * FROM tkaryawan WHERE id = $id")[0];

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <h1 class="m-0 text-dark">View Detail Karyawan</h1>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-lg">

      <div class="row">
        <div class="col">
          <div class="w-100 mb-2">
            <h4>Nama</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['nama']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>No. KTA</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['no_kta']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>Tanggal Lahir</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['tanggal_lahir']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>Tanggal Masuk</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['tanggal_masuk']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>No. KTP</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['no_ktp']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>No. NPWP</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['no_npwp']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>No. EFIN</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['no_efin']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>No. BPJS KES</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['no_bpjs_kes']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>No. BPJS TK</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['no_bpjs_tk']; ?></p>
            </div>
          </div>

        </div>
        <div class="col">

          <div class="w-100 mb-2">
            <h4>Alamat</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['alamat']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>No. HP</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['no_hp']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>Email</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['email']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>Lokasi Kerja</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['lokasi_kerja']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>Nama Istr</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['nama_istri']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>Nama Anak 1</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['nama_anak_1']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>Nama Anak 2</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['nama_anak_2']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>Nama Anak 3</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['nama_anak_3']; ?></p>
            </div>
          </div>

          <div class="w-100 mb-2">
            <h4>Status Pajak</h4>
            <div class="container px-2 py-1 bg-dark rounded">
              <p class="mb-0"><?= $employee['status_pajak']; ?></p>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <div class="container">
        <h1>Foto</h1>
        <div class="row">
          <div class="col">
            <div class="w-100 mb-2">
              <h4>Foto Karyawan</h4>
              <div class="container px-2 py-1">
                <img src="images/karyawan/<?= $employee['foto']; ?>" alt="<?= $employee['foto']; ?>" width="150" height="150">
              </div>
            </div>

            <div class="w-100 mb-2">
              <h4>Foto KTP</h4>
              <div class="container px-2 py-1">
                <img src="images/ktp/<?= $employee['foto_ktp']; ?>" alt="<?= $employee['foto_ktp']; ?>" width="150" height="150">
              </div>
            </div>

            <div class="w-100 mb-2">
              <h4>Foto NPWP</h4>
              <div class="container px-2 py-1">
                <img src="images/npwp/<?= $employee['foto_npwp']; ?>" alt="<?= $employee['foto_npwp']; ?>" width="150" height="150">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="w-100 mb-2">
              <h4>Foto BPJS KIS</h4>
              <div class="container px-2 py-1">
                <img src="images/bpjs-kis/<?= $employee['foto_bpjs_kis']; ?>" alt="<?= $employee['foto_bpjs_kis']; ?>" width="150" height="150">
              </div>
            </div>

            <div class="w-100 mb-2">
              <h4>Foto BPJS TK</h4>
              <div class="container px-2 py-1">
                <img src="images/bpjs-tk/<?= $employee['foto_bpjs_tk']; ?>" alt="<?= $employee['nama']; ?>/<?= $employee['foto_bpjs_tk']; ?>" width="150" height="150">
              </div>
            </div>
          </div>
        </div>
      </div>

      <br><br>
      <a href="index.php?page=view_employee" class="btn btn-secondary mb-5">Back</a>
    </div>

  </section>
  <!-- /.content -->
</div>