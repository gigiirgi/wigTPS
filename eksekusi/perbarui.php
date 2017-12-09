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

	$bulan = $_POST['bulan'] < 10 ? '0'.$_POST['bulan'] : $_POST['bulan'];
					$tahun = $_POST['tahun'];
					$bulan_tahun = $tahun.'-'.$bulan;

	$where = "AND bulan LIKE '$bulan_tahun%'";

		$sql = "UPDATE tunggakan SET  petugas ='$petugas', tim = '$tim', t_pemutusan = '$tpemutusan', r_pemutusan = '$rpemutusan', t_bongkar = '$tbongkar', r_bongkar = '$rbongkar', t_somasi = '$tsomasi', r_somasi = '$rsomasi' WHERE id_rayon = '$kota' AND id_periode = '$waktu' $where";
		$r=mysqli_query($conn, $sql);

			if ($r) {
				echo "New records created successfully";
			} else {
			    echo "Error!";
			}

header("location:../tampilan.php");
?>