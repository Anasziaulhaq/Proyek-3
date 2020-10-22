<?php
// PROSES REGISTRASI USER
if(isset($_POST['register'])){
    session_start();
    include 'koneksi.php';
	$nama	= $_POST['nama'];
	$email	= $_POST['email'];
	$user	= $_POST['username'];
    $pass	= $_POST['password'];
    $pass2  = $_POST['password2'];
 
    if($nama && $email && $user && $pass && $pass2){		
			if($pass == $pass2){
				$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$user'");
				$hasil = mysqli_fetch_assoc($query);
 
				if($hasil  == 0){
					$insert = mysqli_query($conn, "INSERT INTO user VALUES( '', '$user', '$email', '$nama','$pass','','')");
 
					if($insert){
						echo '<script language="javascript">alert("Selamat Anda Berhasil Daftar"); document.location="halogin.php";</script>';
 
						// PADA BARIS INI BISA DI ISI DENGAN SCRIPT LAIN
						// JIKA USER BERHASIL REGISTER
					} else {
						echo '<p>Gagal melakukan Register, coba lagi!</p>';
					}
				} else {
					echo '<p>Username sudah terdaftar, pilih Username lain!</p>';
				}
			} else {
				echo '<p>Ulangi Password yang sama!</p>';
			}
		} else {
			echo '<p>Format Email tidak valid!</p>';
		}
	} else {
		echo '<p>Semua wajib Anda isi!</p>';
	}

?>