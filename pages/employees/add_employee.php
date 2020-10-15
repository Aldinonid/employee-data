<?php
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil di tambahkan atau tidak
	if (addEmployee($_POST) > 0) {
		echo "
			<script>
				alert('Data karyawan baru berhasil ditambahkan !');
				document.location.href = 'index.php?page=view_employee';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data karyawan baru gagal ditambahkan !');
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
				<h1 class="m-0 text-dark">Tambah Karyawan</h1>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-lg">

			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Nama</label>
					<input type="text" name="nama" class="form-control" id="name" placeholder="Nama Karyawan" required />
				</div>

				<div class="form-group">
					<label for="no_kta">No KTA</label>
					<input type="text" name="no_kta" class="form-control" id="no_kta" placeholder="Nomor KTA" />
				</div>

				<div class="form-group">
					<label for="tanggal_lahir">Tanggal Lahir</label>
					<input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" required />
				</div>

				<div class="form-group">
					<label for="tanggal_masuk">Tanggal Masuk</label>
					<input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" placeholder="Tanggal Masuk" required />
				</div>

				<div class="form-group">
					<label for="no_ktp">Nomor KTP</label>
					<input type="number" name="no_ktp" class="form-control" id="no_ktp" placeholder="Nomor KTP" />
				</div>

				<div class="form-group">
					<label for="no_npwp">Nomor NPWP</label>
					<input type="text" name="no_npwp" class="form-control" id="no_npwp" placeholder="Nomor NPWP" />
				</div>

				<div class="form-group">
					<label for="no_efin">Nomor EFIN</label>
					<input type="text" name="no_efin" class="form-control" id="no_efin" placeholder="Nomor EFIN" />
				</div>

				<div class="form-group">
					<label for="no_bpjs_kes">Nomor BPJS Kesehatan</label>
					<input type="text" name="no_bpjs_kes" class="form-control" id="no_bpjs_kes" placeholder="Nomor BPJS Kesehatan" />
				</div>

				<div class="form-group">
					<label for="no_bpjs_tk">Nomor BPJS Ketenagakerjaan</label>
					<input type="text" name="no_bpjs_tk" class="form-control" id="no_bpjs_tk" placeholder="Nomor BPJS Ketenagakerjaan" />
				</div>

				<div class="form-group">
					<label for="no_krk">Nomor KRK</label>
					<input type="text" name="no_krk" class="form-control" id="no_krk" placeholder="Nomor KRK" />
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" />
				</div>

				<div class="form-group">
					<label for="no_hp">Nomor HP</label>
					<input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor HP" />
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Email" />
				</div>

				<div class="form-group">
					<label for="lokasi_kerja">Lokasi Kerja</label>
					<input type="text" name="lokasi_kerja" class="form-control" id="lokasi_kerja" placeholder="Lokasi Kerja" />
				</div>

				<div class="form-group">
					<label for="nama_istri">Nama Istri</label>
					<input type="text" name="nama_istri" class="form-control" id="nama_istri" placeholder="Nama Istri" />
				</div>

				<div class="form-group">
					<label for="nama_anak_1">Nama Anak 1</label>
					<input type="text" name="nama_anak_1" class="form-control" id="nama_anak_1" placeholder="Nama Anak 1" />
				</div>

				<div class="form-group">
					<label for="nama_anak_2">Nama Anak 2</label>
					<input type="text" name="nama_anak_2" class="form-control" id="nama_anak_2" placeholder="Nama Anak 2" />
				</div>

				<div class="form-group">
					<label for="nama_anak_3">Nama Anak 3</label>
					<input type="text" name="nama_anak_3" class="form-control" id="nama_anak_3" placeholder="Nama Anak 3" />
				</div>

				<div class="form-group">
					<label for="status_pajak">Status Pajak</label>
					<input type="text" name="status_pajak" class="form-control" id="status_pajak" placeholder="Status Pajak" />
				</div>

				<div class="form-group">
					<label for="foto">Foto</label>
					<input type="file" name="foto" class="form-control" id="foto" />
				</div>

				<div class="form-group">
					<label for="foto_ktp">Foto KTP</label>
					<input type="file" name="foto_ktp" class="form-control" id="foto_ktp" />
				</div>

				<div class="form-group">
					<label for="foto_npwp">Foto NPWP</label>
					<input type="file" name="foto_npwp" class="form-control" id="foto_npwp" />
				</div>

				<div class="form-group">
					<label for="foto_bpjs_kis">Foto BPJS KIS</label>
					<input type="file" name="foto_bpjs_kis" class="form-control" id="foto_bpjs_kis" />
				</div>

				<div class="form-group">
					<label for="foto_bpjs_tk">Foto BPJS Ketenagakerjaan</label>
					<input type="file" name="foto_bpjs_tk" class="form-control" id="foto_bpjs_tk" />
				</div>

				<br><br>
				<a href="index.php?page=view_employee" class="btn btn-secondary mb-5">Back</a>
				<button type="submit" name="submit" class="btn btn-primary mb-5">Save</button>
			</form>
		</div>

	</section>
	<!-- /.content -->
</div>