<?php 

if (isset($_POST['tambah'])) {
	include "../db_conn.php";
	function validate($data){
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);
return $data;
	}
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);

	$user_data = 'name='.$name.'&email='.$email;
	if(empty($name)) {
		header("Location: ../index.php?error=Nama harus diisikan&$user_data"); 
	} else if (empty($email)) {
		header("Location: ../index.php?error=Email harus diisikan&$user_data");
	} else {
		$sql = "INSERT INTO users(name,email) VALUES('$name','$email')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("Location: ../read.php?success=Identitas Pegawai Berhasil Ditambahkan");
		} else {
            header("Location: ../index.php?error=Terjadi Kesalahan yang Tidak Diketahui&$user_data");
		}

	}



}