<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <h1 class="m-0 text-dark">Daftar User</h1>
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
            <a href="index.php?page=add_user" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Full Name</th>
                  <th>Username</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;

                // Pagination
                $jumlahDataPerHalaman = 10;
                $jumlahData = count(query("SELECT * FROM users"));
                $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                $halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
                $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

                $users = query("SELECT * FROM users LIMIT $awalData, $jumlahDataPerHalaman");
                foreach ($users as $row) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['full_name']; ?></td>
                    <td><?= $row['username']; ?></td>
                    <td class="text-center">
                      <a href="index.php?page=change_password_user&id=<?= $row["id"]; ?>" class="btn btn-outline-info"><i class="fa fa-key"></i></a>
                      <a href="index.php?page=update_user&id=<?= $row["id"]; ?>" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                      <a href="index.php?page=delete_user&id=<?= $row["id"]; ?>" onclick="return confirm('Are you sure want to delete this data ?');" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                <?php $i++;
                endforeach; ?>
              </tbody>
            </table>

            <nav aria-label="Page navigation example" class="mt-4">
              <ul class="pagination justify-content-center">

                <?php if ($halamanAktif > 1) : ?>
                  <li class="page-item"><a class="page-link" href="index.php?page=view_employee&halaman=<?= $halamanAktif - 1; ?>">Previous</a></li>
                <?php else : ?>
                  <li class="page-item disabled"><a class="page-link" href="index.php?page=view_employee&halaman=<?= $halamanAktif - 1; ?>">Previous</a></li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                  <?php if ($i == $halamanAktif) : ?>
                    <li class="page-item active"><a class="page-link" href="index.php?page=view_employee&halaman=<?= $i; ?>" class="active"><?= $i; ?></a></li>
                  <?php else : ?>
                    <li class="page-item"><a class="page-link" href="index.php?page=view_employee&halaman=<?= $i; ?>"><?= $i; ?></a></li>
                  <?php endif; ?>
                <?php endfor; ?>

                <?php if ($halamanAktif < $jumlahHalaman) : ?>
                  <li class="page-item"><a class="page-link" href="index.php?page=view_employee&halaman=<?= $halamanAktif + 1; ?>">Next</a></li>
                <?php else : ?>
                  <li class="page-item disabled"><a class="page-link" href="index.php?page=view_employee&halaman=<?= $halamanAktif + 1; ?>">Next</a></li>
                <?php endif; ?>

              </ul>
            </nav>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>