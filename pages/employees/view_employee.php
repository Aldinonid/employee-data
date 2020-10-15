<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <h1 class="m-0 text-dark">Datar Karyawan</h1>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="index.php?page=add_employee" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i></a>
            <a href="pages/reports/print.php" class="btn btn-primary btn-lg" target="_blank"><i class="fa fa-chart-bar"></i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>KTA</th>
                  <th>Tanggal Lahir</th>
                  <th>Tanggal Masuk</th>
                  <th>KTP</th>
                  <th>NPWP</th>
                  <th>EFIN</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                $mhs = query("SELECT * FROM tkaryawan");
                foreach ($mhs as $row) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['no_kta']; ?></td>
                    <td><?= $row['tanggal_lahir']; ?></td>
                    <td><?= $row['tanggal_masuk']; ?></td>
                    <td><?= $row['no_ktp']; ?></td>
                    <td><?= $row['no_npwp']; ?></td>
                    <td><?= $row['no_efin']; ?></td>
                    <td class="text-center">
                      <a href="index.php?page=view_detail_employee&id=<?= $row["id"]; ?>" class="btn btn-outline-info"><i class="fa fa-eye"></i></a>
                      <a href="index.php?page=update_employee&id=<?= $row["id"]; ?>" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                      <a href="index.php?page=delete_employee&id=<?= $row["id"]; ?>" onclick="return confirm('Are you sure want to delete this data ?');" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                <?php $i++;
                endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>