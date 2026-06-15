<?php
include 'db.php';

$nama_pegawai = $_POST['nama_pegawai'];
$nama_pengguna = $_POST['nama_pengguna'];
$katalaluan = $_POST['katalaluan'];


$sql = "INSERT INTO farmasi (id_user,nama_pegawai,username,katalaluan) VALUES (' ','$nama_pegawai','$nama_pengguna','$katalaluan')";

if(mysqli_query($conn,$sql)){
	echo "<script>
		alert ('Data berjaya disimpan');
		window.location ='dashboard.php';
		</script>";
} else {
			"Error : ".mysqli.error($conn);
}

?>