<?php
	require_once '../koneksi/koneksi.php';

	$kota = $_POST ['kota'];
	$waktu = $_POST ['waktu'];
	$tpemutusan = $_POST ['t_pemutusan'];
	$rpemutusan = $_POST ['r_pemutusan'];
	$tbongkar = $_POST ['t_bongkar'];
	$rbongkar = $_POST ['r_bongkar'];
	$tsomasi = $_POST ['t_somasi'];
	$rsomasi = $_POST ['r_somasi'];
	$petugas = $_POST ['petugas'];
	$tim = $_POST ['tim'];
	$tanggal = date("Y-m-d");

		$sql = "INSERT INTO tunggakan (petugas, tim, t_pemutusan, r_pemutusan, t_bongkar, r_bongkar, t_somasi, r_somasi, bulan, id_rayon, id_periode) VALUES ('$petugas', '$tim', '$tpemutusan', '$rpemutusan', '$tbongkar', '$rbongkar', '$tsomasi', '$rsomasi', '$tanggal', '$kota', '$waktu')";
		$r=mysqli_query($conn, $sql);

			if ($r) {
				echo "New records created successfully";
			} else {
			    echo "Error!";
			}

header("location:../tampilan.php");
?>