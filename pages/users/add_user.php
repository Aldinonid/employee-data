<?php
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil di tambahkan atau tidak
	if (addUser($_POST) > 0) {
		echo "
			<script>
				alert('User baru berhasil ditambahkan !');
				document.location.href = 'index.php?page=view_user';
			</script>
		";
	} else {
		echo "
			<script>
				alert('User baru gagal ditambahkan !');
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
				<h1 class="m-0 text-dark">Tambah User</h1>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-lg">

			<form action="" method="POST">
				<div class="form-group">
					<label for="name">Full Name</label>
					<input type="text" name="full_name" class="form-control" id="name" placeholder="Enter Name" required />
				</div>

				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required />
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required />
				</div>

				<br><br>
				<a href="index.php?page=view_user" class="btn btn-secondary">Back</a>
				<button type="submit" name="submit" class="btn btn-primary">Save</button>
			</form>
		</div>

	</section>
	<!-- /.content -->
</div>