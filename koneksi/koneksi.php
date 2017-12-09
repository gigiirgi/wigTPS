<?php

	$servername	= "localhost";
	$database  	= "dbpln";
	$username 	= "root";
	$password 	= "";	

	$conn = mysqli_connect($servername, $username, $password);
	mysqli_select_db($conn, 'dbpln');

// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
//     mysqli_close($conn);
// }
// echo "Koneksi berhasil";
?>