<?php

$id = $_GET["id"];

if (deleteLecture($id) > 0) {
	echo "
		<script>
			alert('User berhasil dihapus !');
			document.location.href = 'index.php?page=view_user';
		</script>
	";
} else {
	echo "
		<script>
			alert('User gagal dihapus !');
			document.location.href = 'index.php?page=view_user';
		</script>
	";
}
