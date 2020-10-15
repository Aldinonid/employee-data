<?php
//? Connect a DB
$conn = mysqli_connect("localhost", "root", "", "dbkaryawan");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}



function addEmployee($data)
{
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$no_kta = htmlspecialchars($data["no_kta"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$tanggal_masuk = htmlspecialchars($data["tanggal_masuk"]);
	$no_ktp = htmlspecialchars($data["no_ktp"]);
	$no_npwp = htmlspecialchars($data["no_npwp"]);
	$no_efin = htmlspecialchars($data["no_efin"]);
	$no_bpjs_kes = htmlspecialchars($data["no_bpjs_kes"]);
	$no_bpjs_tk = htmlspecialchars($data["no_bpjs_tk"]);
	$no_krk = htmlspecialchars($data["no_krk"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$email = htmlspecialchars($data["email"]);
	$lokasi_kerja = htmlspecialchars($data["lokasi_kerja"]);
	$nama_istri = htmlspecialchars($data["nama_istri"]);
	$nama_anak_1 = htmlspecialchars($data["nama_anak_1"]);
	$nama_anak_2 = htmlspecialchars($data["nama_anak_2"]);
	$nama_anak_3 = htmlspecialchars($data["nama_anak_3"]);
	$status_pajak = htmlspecialchars($data["status_pajak"]);

	//TODO: upload gambar
	$foto = upload('foto', 'karyawan');
	$foto_ktp = upload('foto_ktp', 'ktp');
	$foto_npwp = upload('foto_npwp', 'npwp');
	$foto_bpjs_kis = upload('foto_bpjs_kis', 'bpjs-kis');
	$foto_bpjs_tk = upload('foto_bpjs_tk', 'bpjs-tk');


	$query = "INSERT INTO tkaryawan
				VALUES
			('', '$nama', '$no_kta', '$tanggal_lahir', '$tanggal_masuk', '$no_ktp', '$no_npwp', '$no_efin', '$no_bpjs_kes', '$no_bpjs_tk', '$no_krk', '$alamat', '$no_hp', '$email', '$lokasi_kerja', '$nama_istri', '$nama_anak_1', '$nama_anak_2', '$nama_anak_3', '$status_pajak', '$foto', '$foto_ktp', '$foto_npwp', '$foto_bpjs_kis', '$foto_bpjs_tk')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function addUser($data)
{
	global $conn;

	$full_name = $data["full_name"];
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
						alert('Username sudah ada !')
					</script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password', '$full_name')");

	return mysqli_affected_rows($conn);
}



function deleteEmployee($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM tkaryawan WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function deleteLecture($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM users WHERE id = $id");
	return mysqli_affected_rows($conn);
}



function updateEmployee($data)
{
	global $conn;

	$id = $data["id"];
	$nama = $data["nama"];
	$no_kta = $data["no_kta"];
	$tanggal_lahir = $data["tanggal_lahir"];
	$tanggal_masuk = $data["tanggal_masuk"];
	$no_ktp = $data["no_ktp"];
	$no_npwp = $data["no_npwp"];
	$no_efin = $data["no_efin"];
	$no_bpjs_kes = $data["no_bpjs_kes"];
	$no_bpjs_tk = $data["no_bpjs_tk"];
	$no_krk = $data["no_krk"];
	$alamat = $data["alamat"];
	$no_hp = $data["no_hp"];
	$email = $data["email"];
	$lokasi_kerja = $data["lokasi_kerja"];
	$nama_istri = $data["nama_istri"];
	$nama_anak_1 = $data["nama_anak_1"];
	$nama_anak_2 = $data["nama_anak_2"];
	$nama_anak_3 = $data["nama_anak_3"];
	$status_pajak = $data["status_pajak"];
	$foto_lama = $data['foto_lama'];
	$foto_ktp_lama = $data['foto_ktp_lama'];
	$foto_npwp_lama = $data['foto_npwp_lama'];
	$foto_bpjs_kis_lama = $data['foto_bpjs_kis_lama'];
	$foto_bpjs_tk_lama = $data['foto_bpjs_tk_lama'];

	//? Cek apakah user ada tekan tombol upload
	if ($_FILES['foto']['error'] === 4) {

		//? Memasukkan ulang foto lama
		$foto = $foto_lama;
	} else {

		//? Hapus foto lama di direktori
		unlink("images/karyawan/$foto_lama");

		//? Replace foto baru dengan foto lama
		$foto = upload('foto', 'karyawan');
	}

	if ($_FILES['foto_ktp']['error'] === 4) {
		$foto_ktp = $foto_ktp_lama;
	} else {
		unlink("images/ktp/$foto_ktp_lama");
		$foto_ktp = upload('foto_ktp', 'ktp');
	}

	if ($_FILES['foto_npwp']['error'] === 4) {
		$foto_npwp = $foto_npwp_lama;
	} else {
		unlink("images/npwp/$foto_npwp_lama");
		$foto_npwp = upload('foto_npwp', 'npwp');
	}

	if ($_FILES['foto_bpjs_kis']['error'] === 4) {
		$foto_bpjs_kis = $foto_bpjs_kis_lama;
	} else {
		unlink("images/bpjs-kis/$foto_bpjs_kis_lama");
		$foto_bpjs_kis = upload('foto_bpjs_kis', 'bpjs-kis');
	}

	if ($_FILES['foto_bpjs_tk']['error'] === 4) {
		$foto_bpjs_tk = $foto_bpjs_tk_lama;
	} else {
		unlink("images/bpjs-tk/$foto_bpjs_tk_lama");
		$foto_bpjs_tk = upload('foto_bpjs_tk', 'bpjs-tk');
	}


	$query = "UPDATE tkaryawan SET
				nama = '$nama',
				no_kta = '$no_kta',
				tanggal_lahir = '$tanggal_lahir',
				tanggal_masuk = '$tanggal_masuk',
				no_ktp = '$no_ktp',
				no_npwp = '$no_npwp',
				no_efin = '$no_efin',
				no_bpjs_kes = '$no_bpjs_kes',
				no_bpjs_tk = '$no_bpjs_tk',
				no_krk = '$no_krk',
				alamat = '$alamat',
				no_hp = '$no_hp',
				email = '$email',
				lokasi_kerja = '$lokasi_kerja',
				nama_istri = '$nama_istri',
				nama_anak_1 = '$nama_anak_1',
				nama_anak_2 = '$nama_anak_2',
				nama_anak_3 = '$nama_anak_3',
				status_pajak = '$status_pajak',
				foto = '$foto',
				foto_ktp = '$foto_ktp',
				foto_npwp = '$foto_npwp',
				foto_bpjs_kis = '$foto_bpjs_kis',
				foto_bpjs_tk = '$foto_bpjs_tk'
			WHERE id = '$id'
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function updateUser($data)
{
	global $conn;

	$id = $data["id"];
	$full_name = $data["full_name"];
	$username = strtolower(stripslashes($data["username"]));


	$query = "UPDATE users SET
				full_name = '$full_name',
				username = '$username'
			WHERE id = '$id'
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload($uploadFile, $photoType)
{
	// Ambil data dari $_FILES
	$namaFile = $_FILES[$uploadFile]['name'];
	$ukuranFile = $_FILES[$uploadFile]['size'];
	$error = $_FILES[$uploadFile]['error'];
	$tmpName = $_FILES[$uploadFile]['tmp_name'];

	// Cek the uploaded file is IMAGE
	$validExtention = ['jpg', 'jpeg', 'png'];
	$fileExtension = explode('.', $namaFile);
	$fileExtension = strtolower(end($fileExtension));
	if (!in_array($fileExtension, $validExtention)) {
		echo "<script>
						alert('Uploaded file must be image'
					</script>";
		return false;
	}

	// Generate nama image
	$fileNameBaru = time();
	$fileNameBaru .= '.' . $fileExtension;

	// Upload gambar
	move_uploaded_file($tmpName, "images/$photoType/" . $fileNameBaru);

	return $fileNameBaru;
}

function changePassword($data)
{
	global $conn;

	$id = $data['id'];
	$password = mysqli_real_escape_string($conn, $data["password"]);

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	$query = "UPDATE users SET
				password = '$password'
			WHERE id = '$id'
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function register($data)
{
	global $conn;

	$fullName = $data["full_name"];
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
						alert('Username sudah ada !')
					</script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password', '$fullName')");

	return mysqli_affected_rows($conn);
}
