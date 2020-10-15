<?php
// ? Get data from URL
$id = $_GET["id"];

// ? Query data Mahasiswa based on id
$user = query("SELECT * FROM users WHERE id = $id")[0];


// ? Check if edit button has been clicked
if (isset($_POST["submit"])) {

  // ? Check is the data has been updated
  if (changePassword($_POST) > 0) {
    echo "
			<script>
				alert('Password berhasil diubah !');
				document.location.href = 'index.php?page=view_user';
			</script>
		";
  } else {
    echo "
			<script>
				alert('Password gagal diubah !');
				document.location.href = 'index.php?page=view_user';
			</script>
		";
  }
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <h1 class="m-0 text-dark">Change Password</h1>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-lg">

      <form action="" method="POST">
        <input hidden name="id" value="<?= $user['id']; ?>">

        <div class="form-group">
          <label for="password">Password Baru</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" />
        </div>

        <br><br>
        <a href="index.php?page=view_user" class="btn btn-secondary">Back</a>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
      </form>
    </div>

  </section>
  <!-- /.content -->
</div>