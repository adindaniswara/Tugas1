<?php 

if(isset($_GET['id'])) {
	include "../db_conn.php";
	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$id = validate($_GET['id']);

	$sql = "DELETE FROM users WHERE id=$id";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("Location: ../read.php?success=Identitas Pegawai Berhasil Dihapus");
		} else {
            header("Location: ../read.php?error=Terjadi Kesalahan yang Tidak Diketahui&$user_data");
		}
} else {
	header("Location: ../read.php");
}
