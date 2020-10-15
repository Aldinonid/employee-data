<?php
// ? Get data from URL
$id = $_GET["id"];

// ? Query data Mahasiswa based on id
$employee = query("SELECT * FROM tkaryawan WHERE id = $id")[0];


// ? Check if edit button has been clicked
if (isset($_POST["submit"])) {

	// ? Check is the data has been updated
	if (updateEmployee($_POST) > 0) {
		echo "
			<script>
				alert('Data karyawan berhasil diubah !');
				document.location.href = 'index.php?page=view_employee';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data karyawan gagal ditambahkan !');
				document.location.href = 'index.php?page=view_employee';
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
				<h1 class="m-0 text-dark">Edit Student</h1>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-lg">

			<form action="" method="POST" enctype="multipart/form-data">
				<input hidden name="id" value="<?= $employee['id'] ?>">
				<input hidden name="foto_lama" value="<?= $employee['foto'] ?>">
				<input hidden name="foto_ktp_lama" value="<?= $employee['foto_ktp'] ?>">
				<input hidden name="foto_npwp_lama" value="<?= $employee['foto_npwp'] ?>">
				<input hidden name="foto_bpjs_kis_lama" value="<?= $employee['foto_bpjs_kis'] ?>">
				<input hidden name="foto_bpjs_tk_lama" value="<?= $employee['foto_bpjs_tk'] ?>">

				<div class="form-group">
					<label for="name">Nama</label>
					<input type="text" name="nama" class="form-control" id="name" placeholder="Nama Karyawan" value="<?= $employee['nama'] ?>" required />
				</div>

				<div class="form-group">
					<label for="no_kta">No KTA</label>
					<input type="text" name="no_kta" class="form-control" id="no_kta" placeholder="Nomor KTA" value="<?= $employee['no_kta'] ?>" />
				</div>

				<div class="form-group">
					<label for="tanggal_lahir">Tanggal Lahir</label>
					<input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $employee['tanggal_lahir'] ?>" required />
				</div>

				<div class="form-group">
					<label for="tanggal_masuk">Tanggal Masuk</label>
					<input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" placeholder="Tanggal Masuk" value="<?= $employee['tanggal_masuk'] ?>" required />
				</div>

				<div class="form-group">
					<label for="no_ktp">Nomor KTP</label>
					<input type="number" name="no_ktp" class="form-control" id="no_ktp" placeholder="Nomor KTP" value="<?= $employee['nama'] ?>" />
				</div>

				<div class="form-group">
					<label for="no_npwp">Nomor NPWP</label>
					<input type="text" name="no_npwp" class="form-control" id="no_npwp" placeholder="Nomor NPWP" value="<?= $employee['nama'] ?>" />
				</div>

				<div class="form-group">
					<label for="no_efin">Nomor EFIN</label>
					<input type="text" name="no_efin" class="form-control" id="no_efin" placeholder="Nomor EFIN" value="<?= $employee['nama'] ?>" />
				</div>

				<div class="form-group">
					<label for="no_bpjs_kes">Nomor BPJS Kesehatan</label>
					<input type="text" name="no_bpjs_kes" class="form-control" id="no_bpjs_kes" placeholder="Nomor BPJS Kesehatan" value="<?= $employee['nama'] ?>" />
				</div>

				<div class="form-group">
					<label for="no_bpjs_tk">Nomor BPJS Ketenagakerjaan</label>
					<input type="text" name="no_bpjs_tk" class="form-control" id="no_bpjs_tk" placeholder="Nomor BPJS Ketenagakerjaan" value="<?= $employee['nama'] ?>" />
				</div>

				<div class="form-group">
					<label for="no_krk">Nomor KRK</label>
					<input type="text" name="no_krk" class="form-control" id="no_krk" placeholder="Nomor KRK" value="<?= $employee['no_krk'] ?>" />
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="<?= $employee['alamat'] ?>" />
				</div>

				<div class="form-group">
					<label for="no_hp">Nomor HP</label>
					<input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor HP" value="<?= $employee['no_hp'] ?>" />
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= $employee['email'] ?>" />
				</div>

				<div class="form-group">
					<label for="lokasi_kerja">Lokasi Kerja</label>
					<input type="text" name="lokasi_kerja" class="form-control" id="lokasi_kerja" placeholder="Lokasi Kerja" value="<?= $employee['lokasi_kerja'] ?>" />
				</div>

				<div class="form-group">
					<label for="nama_istri">Nama Istri</label>
					<input type="text" name="nama_istri" class="form-control" id="nama_istri" placeholder="Nama Istri" value="<?= $employee['nama_istri'] ?>" />
				</div>

				<div class="form-group">
					<label for="nama_anak_1">Nama Anak 1</label>
					<input type="text" name="nama_anak_1" class="form-control" id="nama_anak_1" placeholder="Nama Anak 1" value="<?= $employee['nama_anak_1'] ?>" />
				</div>

				<div class="form-group">
					<label for="nama_anak_2">Nama Anak 2</label>
					<input type="text" name="nama_anak_2" class="form-control" id="nama_anak_2" placeholder="Nama Anak 2" value="<?= $employee['nama_anak_2'] ?>" />
				</div>

				<div class="form-group">
					<label for="nama_anak_3">Nama Anak 3</label>
					<input type="text" name="nama_anak_3" class="form-control" id="nama_anak_3" placeholder="Nama Anak 3" value="<?= $employee['nama_anak_3'] ?>" />
				</div>

				<div class="form-group">
					<label for="status_pajak">Status Pajak</label>
					<input type="text" name="status_pajak" class="form-control" id="status_pajak" placeholder="Status Pajak" value="<?= $employee['status_pajak'] ?>" />
				</div>

				<div class="form-group">
					<label for="foto">Foto</label>
					<input type="file" name="foto" class="form-control mb-3" id="foto" />
					<img src="images/karyawan/<?= $employee['foto']; ?>" alt="<?= $employee['foto']; ?>" width="150" height="150">
				</div>

				<div class="form-group">
					<label for="foto_ktp">Foto KTP</label>
					<input type="file" name="foto_ktp" class="form-control mb-3" id="foto_ktp" />
					<img src="images/ktp/<?= $employee['foto_ktp']; ?>" alt="<?= $employee['foto_ktp']; ?>" width="150" height="150">
				</div>

				<div class="form-group">
					<label for="foto_npwp">Foto NPWP</label>
					<input type="file" name="foto_npwp" class="form-control mb-3" id="foto_npwp" />
					<img src="images/npwp/<?= $employee['foto_npwp']; ?>" alt="<?= $employee['foto_npwp']; ?>" width="150" height="150">
				</div>

				<div class="form-group">
					<label for="foto_bpjs_kis">Foto BPJS KIS</label>
					<input type="file" name="foto_bpjs_kis" class="form-control mb-3" id="foto_bpjs_kis" />
					<img src="images/bpjs-kis/<?= $employee['foto_bpjs_kis']; ?>" alt="<?= $employee['foto_bpjs_kis']; ?>" width="150" height="150">
				</div>

				<div class="form-group">
					<label for="foto_bpjs_tk">Foto BPJS Ketenagakerjaan</label>
					<input type="file" name="foto_bpjs_tk" class="form-control mb-3" id="foto_bpjs_tk" />
					<img src="images/bpjs-tk/<?= $employee['foto_bpjs_tk']; ?>" alt="<?= $employee['nama']; ?>/<?= $employee['foto_bpjs_tk']; ?>" width="150" height="150">
				</div>

				<br><br>
				<a href="index.php?page=view_employee" class="btn btn-secondary mb-5">Back</a>
				<button type="submit" name="submit" class="btn btn-primary mb-5">Save</button>
			</form>
		</div>

	</section>
	<!-- /.content -->
</div>