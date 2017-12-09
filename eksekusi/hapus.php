<?php
	include "../koneksi/koneksi.php";

	$kota = $_POST ['kota'];
	$waktu = $_POST ['waktu'];

	$bulan = $_POST['bulan'] < 10 ? '0'.$_POST['bulan'] : $_POST['bulan'];
					$tahun = $_POST['tahun'];
					$bulan_tahun = $tahun.'-'.$bulan;

	$where = "AND bulan LIKE '$bulan_tahun%'";


		$sql = "DELETE FROM tunggakan WHERE id_rayon = '$kota' and id_periode = '$waktu' $where";
		
		$r=mysqli_query($conn, $sql);

			if ($r) {
				echo "Data records deleted successfully";
			} else {
			    echo "Error!";
			}
header("location:../tampilan.php");
?>