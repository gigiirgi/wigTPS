<?php 
	include "../koneksi/koneksi.php";
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=data-januari.xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Januari</title>
</head>
<body>
	<div>
		<h4 align="center"><b>WIG Tunggakan<br>Penurunan Saldo Area Pamekasan</b></h4>
	</div>
		<div id="body">
			<table border="1">
				<tr>
	 				<th width="4%" rowspan="3">RAYON</th>
	 				<th width="7%" rowspan="3">REALISASI MINGGUAN</th>
	 				<th colspan="9" >WIG TUNGGAKAN Penurunan Saldo</th>
	 				<th width="200px" rowspan="3">KETERANGAN PETUGAS</th>
				</tr>
				<tr>
					<th rowspan="1" colspan="3" width="700px" align="center">LM1 : Pemutusan</th>
					<th rowspan="1" colspan="3" width="800px" align="center">LM2 : Bongkar Rampung</th>
					<th rowspan="1" colspan="3" width="900px" align="center">LM3 : Somasi</th>	
				</tr>
				<tr>
					<th width="7%" align="center">TARGET</th>
					<th width="7%" align="center">REALISASI</th>
					<th width="5%" align="center">%</th>
					<th width="7%" align="center">TARGET</th>
					<th width="7%" align="center">REALISASI</th>
					<th width="5%" align="center">%</th>
					<th width="7%" align="center">TARGET</th>
					<th width="7%" align="center">REALISASI</th>
					<th width="5%" align="center">%</th>
				</tr>
				<tr>
					<?php
						include "../koneksi/koneksi.php";
						$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='1' && id_periode='1' && (MONTH(bulan)='01') ") or die (mysqli_error());
						$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
						$num = mysqli_num_rows($data);
					?>
					<th rowspan="4">PAMEKASAN</th>
					<td align="center">M1</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri : <?php echo $row['petugas']?> PTGS<br>	
										Tim Bongkar: <?php echo $row['tim']?> TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='1' and id_periode='2' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='1' and id_periode='3' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='1' and id_periode='4' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='2' and id_periode='1' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<th rowspan="4">SUMENEP</th>
					<td align="center">M1</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri : <?php echo $row['petugas']?> PTGS<br>	
										Tim Bongkar: <?php echo $row['tim']?> TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='2' and id_periode='2' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='2' and id_periode='3' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='2' and id_periode='4' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>

				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='3' and id_periode='1' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<th rowspan="4">SAMPANG</th>
					<td align="center">M1</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri : <?php echo $row['petugas']?> PTGS<br>	
										Tim Bongkar: <?php echo $row['tim']?> TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='3' and id_periode='2' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='3' and id_periode='3' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='3' and id_periode='4' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>

				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='4' and id_periode='1' and (MONTH(bulan)='01') ") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<th rowspan="4">BANGKALAN</th>
					<td align="center">M1</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri : <?php echo $row['petugas']?> PTGS<br>	
										Tim Bongkar: <?php echo $row['tim']?> TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='4' and id_periode='2' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='4' and id_periode='3' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='4' and id_periode='4' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo $hasil;
												} else {
													echo "0";
												}
												
					 ?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>

				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='5' and id_periode='1' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<th rowspan="4">KAMAL</th>
					<td align="center">M1</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri : <?php echo $row['petugas']?> PTGS<br>	
										Tim Bongkar: <?php echo $row['tim']?> TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='5' and id_periode='2' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='5' and id_periode='3' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='5' and id_periode='4' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>

				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='6' and id_periode='1' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<th rowspan="4">KETAPANG</th>
					<td align="center">M1</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri : <?php echo $row['petugas']?> PTGS<br>	
										Tim Bongkar: <?php echo $row['tim']?> TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='6' and id_periode='2' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='6' and id_periode='3' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='6' and id_periode='4' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>

				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='7' and id_periode='1' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<th rowspan="4">BLEGA</th>
					<td align="center">M1</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri : <?php echo $row['petugas']?> PTGS<br>	
										Tim Bongkar: <?php echo $row['tim']?> TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='7' and id_periode='2' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='7' and id_periode='3' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='7' and id_periode='4' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>

				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='8' and id_periode='1' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<th rowspan="4">PRENDUAN</th>
					<td align="center">M1</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri : <?php echo $row['petugas']?> PTGS<br>	
										Tim Bongkar: <?php echo $row['tim']?> TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='8' and id_periode='2' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='8' and id_periode='3' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='8' and id_periode='4' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>

				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='9' and id_periode='1' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<th rowspan="4">WARU</th>
					<td align="center">M1</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri : <?php echo $row['petugas']?> PTGS<br>	
										Tim Bongkar: <?php echo $row['tim']?> TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='9' and id_periode='2' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='9' and id_periode='3' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='9' and id_periode='4' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>

				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='10' and id_periode='1' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<th rowspan="4">AMBUNTEN</th>
					<td align="center">M1</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri : <?php echo $row['petugas']?> PTGS<br>	
										Tim Bongkar: <?php echo $row['tim']?> TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='10' and id_periode='2' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='10' and id_periode='3' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan WHERE id_rayon='10' and id_periode='4' and (MONTH(bulan)='01')") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php echo $row['t_pemutusan']; ?> </td>
					<td align="center"> <?php echo $row['r_pemutusan']; ?> </td>
					<td align="center"> <?php 	if ($row['r_pemutusan' && $row['t_pemutusan'] != 0]) {
													$hasil = ($row['r_pemutusan']/$row['t_pemutusan']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_bongkar']; ?></td>
					<td align="center"> <?php echo $row['r_bongkar']; ?></td>
					<td align="center"> <?php 	if ($row['r_bongkar' && $row['t_bongkar'] != 0]) {
													$hasil = ($row['r_bongkar']/$row['t_bongkar']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php echo $row['t_somasi']; ?></td>
					<td align="center"> <?php echo $row['r_somasi']; ?></td>
					<td align="center"> <?php 	if ($row['r_somasi' && $row['t_somasi'] != 0]) {
													$hasil = ($row['r_somasi']/$row['t_somasi']*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>

				<tr>
				<?php
					
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
					$num = mysqli_num_rows($data);

				?>
					<th rowspan="4">AREA</th>
					<td align="center">M1</td>

					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='1' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$tp1= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$tp1 += $num['t_pemutusan'];
														}
												echo $tp1; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='1' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rp1= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rp1 += $num['r_pemutusan'];
														}
												echo $rp1; ?> </td>
					<td align="center"> <?php 	if ($tp1 && $rp1 != 0) {
													$hasil = ($rp1/$tp1*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='1' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$tb1 = 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$tb1 += $num['t_bongkar'];
														}
												echo $tb1; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='1' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rb1= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rb1 += $num['r_bongkar'];
														}
												echo $rb1; ?> </td>
					<td align="center"> <?php 	if ($tb1 && $rb1 != 0) {
													$hasil = ($rb1/$tb1*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='1' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$ts1 = 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$ts1 += $num['t_somasi'];
														}
												echo $ts1; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='1' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rs1= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rs1 += $num['r_somasi'];
														}
												echo $rs1; ?> </td>
					<td align="center"> <?php 	if ($ts1 && $rs1 != 0) {
													$hasil = ($rs1/$ts1*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td rowspan="4" >	Tusbung Mandiri: - PTGS<br>	
										Tim Bongkar: - TIM </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
				?>
					<td align="center">M2</td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='2' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$tp2= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$tp2 += $num['t_pemutusan'];
														}
												echo $tp2; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='2' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rp2= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rp2 += $num['r_pemutusan'];
														}
												echo $rp2; ?> </td>
					<td align="center"> <?php 	if ($tp2 && $rp2 != 0) {
													$hasil = ($rp2/$tp2*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='2' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$tb2= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$tb2 += $num['t_bongkar'];
														}
												echo $tb2; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='2' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rb2= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rb2 += $num['r_bongkar'];
														}
												echo $rb2; ?> </td>
					<td align="center"> <?php 	if ($tp2 && $rp2 != 0) {
													$hasil = ($rb2/$tb2*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='2' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$ts2= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$ts2 += $num['t_somasi'];
														}
												echo $ts2; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='2' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rs2= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rs2 += $num['r_somasi'];
														}
												echo $rs2; ?> </td>
					<td align="center"> <?php 	if ($ts2 && $rs2 != 0) {
													$hasil = ($rs2/$ts2*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
				?>
					<td align="center">M3</td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='3' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$tp3= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$tp3 += $num['t_pemutusan'];
														}
												echo $tp3; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='3' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rp3= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rp3 += $num['r_pemutusan'];
														}
												echo $rp3; ?> </td>
					<td align="center"> <?php 	if ($tp3 && $rp3 != 0) {
													$hasil = ($rp3/$tp3*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='3' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$tb3= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$tb3 += $num['t_bongkar'];
														}
												echo $tb3; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='3' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rb3= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rb3 += $num['r_bongkar'];
														}
												echo $rb3; ?> </td>
					<td align="center"> <?php 	if ($tp3 && $rp3 != 0) {
													$hasil = ($rb3/$tb3*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='3' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$ts3= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$ts3 += $num['t_somasi'];
														}
												echo $ts3; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='3' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rs3= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rs3 += $num['r_somasi'];
														}
												echo $rs3; ?> </td>
					<td align="center"> <?php 	if ($ts3 && $rs3 != 0) {
													$hasil = ($rs3/$ts3*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>
				<tr>
				<?php
					$data	= mysqli_query($conn, "SELECT * FROM tunggakan") or die (mysqli_error());
					$row 	= mysqli_fetch_array ($data, MYSQLI_BOTH);
				?>
					<td align="center">M4</td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='4' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$tp4= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$tp4 += $num['t_pemutusan'];
														}
												echo $tp4; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='4' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rp4= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rp4 += $num['r_pemutusan'];
														}
												echo $rp4; ?> </td>
					<td align="center"> <?php 	if ($tp4 && $rp4 != 0) {
													$hasil = ($rp4/$tp4*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='4' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$tb4= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$tb4 += $num['t_bongkar'];
														}
												echo $tb4; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='4' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rb4= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rb4 += $num['r_bongkar'];
														}
												echo $rb4; ?> </td>
					<td align="center"> <?php 	if ($tp4 && $rp4 != 0) {
													$hasil = ($rb4/$tb4*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='4' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$ts4= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$ts4 += $num['t_somasi'];
														}
												echo $ts4; ?> </td>
					<td align="center"> <?php  	$query = "SELECT * FROM tunggakan WHERE id_periode='4' and (MONTH(bulan)='01')";
												$query_run = mysqli_query($conn, $query);
													$rs4= 0;
														while ($num = mysqli_fetch_assoc ($query_run)) {
	    													$rs4 += $num['r_somasi'];
														}
												echo $rs4; ?> </td>
					<td align="center"> <?php 	if ($ts4 && $rs4 != 0) {
													$hasil = ($rs4/$ts4*100);
													echo "".ceil($hasil);
												} else {
													echo "0";
												}
										?> </td>
				</tr>	
		</div>
	</div>
</body>
</html>