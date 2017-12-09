<?php
	session_start();
	include "../koneksi/koneksi.php";


	$username = $_POST['user'];
	$password = $_POST['pass'];
	$login = $_POST['login'];

	if(isset($_POST['login'])){
		$username	= $_POST['user'];
		$password	= ($_POST['pass']);
			
		$query = mysqli_query($conn, "SELECT * FROM pengguna WHERE username='$username' AND password='$password'");
		$row=mysqli_fetch_array($query);

		if ($row['username'] == $username AND $row['password'] == $password){
			if($row['jabatan'] == 'admin'){
			  	// session_start();
				$_SESSION['username'] = $row['username'];
				$_SESSION['password'] = $row['password'];
				echo "<script>alert('Anda login sebagai ADMIN !!!'); window.location='../tampilan.php'</script>";
			} else {
				// session_start();
			  	$_SESSION['username'] = $row['username'];
				$_SESSION['password'] = $row['password'];
				echo "<script>alert('Anda login sebagai CLIENT !!!'); window.location='../tampilan.php'</script>";
			}
		} else {
			echo "<script>alert('Username atau password Salah !!!'); window.location='../user/login.php'</script>";
		}	
	}
?>