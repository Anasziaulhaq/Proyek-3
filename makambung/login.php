<?php
	if (isset($_POST['login'])) {
		session_start();
		include 'koneksi.php';
		date_default_timezone_set('Asia/Jakarta');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$last_login = date("Y-m-d H:i:s");
		$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' and password = '$password'");
		$hasil = mysqli_fetch_assoc($query);
		if ($hasil != NULL) {
			$query1 = mysqli_query($conn, "UPDATE user set last_login = '$last_login' WHERE username = '$username'");
			if($query1 != NULL ){
				$id_user = $hasil['id_user'];
				$nama_pegawai = $hasil['username'];
				$_SESSION['id_user'] = $id_user;
				$_SESSION['username'] = $username;
				echo '<script language="javascript">alert("Last Login di Update!"); document.location="index.php";</script>';
    		}
		}else{
			echo '<script language="javascript">alert("ID_PEGAWAI/Password anda salah!"); document.location="index.php";</script>';
		}
	}
?>