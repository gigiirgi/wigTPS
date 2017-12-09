<?php
	include "koneksi/koneksi.php";
	session_start();
    if(empty($_SESSION['username'])){
    	echo "<script>alert('Anda Harus login terlebih dahulu !!!'); window.location='user/login.php'</script>";

	} else if ($_SESSION['username']!='admin') {
    	echo "<script>alert('Anda Tidak memiliki hak akses !!!'); window.location='tampilan.php'</script>";		
	}
?>

<html>
	<head>
		<script language='JavaScript'>
		var txt=" Halaman Delete Data [Software WIG TPS] ";
		var speed=250;
		var refresh=null;
			function action() { document.title=txt;
				txt=txt.substring(1,txt.length)+txt.charAt(0);
				refresh=setTimeout("action()",speed);
			}
		action();
	</script>
	<link rel="stylesheet" type="text/css" href="style/form.css">
	</head>
<body>
	<div class="menu-wrap">
		<a href="tampilan.php"><img src="img/logoPLN.jpg" height="75px" width="75px" class="logo"></a>
			<ul>
				<li>PT. PLN(Persero)</li>
			</ul>
	</div>
	<div class="wrap">
		<div class="header">
			<header><b>Form Hapus Data</b></header>
		</div>		
		
	<div class="body">
		<center>
		<form method ='POST' action = 'eksekusi/hapus.php'>
			<table>
				<tr>
					<tr>
						<th width="200" colspan="4" align="center">WIG Tunggakan</th>
					</tr>
						<th width="200" align="center"> Rayon </th>
							<td width="300" align="center" colspan="2"><select name="kota">
								<option value="1">PAMEKASAN</option>
								<option value="2">SUMENEP</option>
								<option value="3">SAMPANG</option>
								<option value="4">BANGKALAN</option>
								<option value="5">KAMAL</option>
								<option value="6">KETAPANG</option>
								<option value="7">BLEGA</option>
								<option value="8">PRENDUAN</option>
								<option value="9">WARU</option>
								<option value="10">AMBUNTEN</option>
							</select></td><br>
				</tr>
				<tr>
					<th width="200" align="center"> Realisasi Mingguan  </th>
						<td width="300" align="center" colspan="2"><select  name="waktu">
							<option value="1">M1</option>
							<option value="2">M2</option>
							<option value="3">M3</option>
							<option value="4">M4</option>	
						</select> </td>
				</tr>
				<tr>
					<th width="200" align="center" colspan="1"> Pilih Bulan </th>
						<td width="300" align="center" colspan="2"><select name="bulan">
								<option value="1">Januari</option>
								<option value="2">Februari</option>
								<option value="3">Maret</option>
								<option value="4">Apil</option>
								<option value="5">Mei</option>
								<option value="6">Juni</option>
								<option value="7">Juli</option>
								<option value="8">Agustus</option>
								<option value="9">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>                  
							</select>
						</td>
				</tr>
				<tr>
					<th width="200" align="center" colspan="1"> Pilih Tahun</th>
						<td width="300" align="center" colspan="2"><select name="tahun">
							<option value="2017">2017</option>
							<option value="2018">2018</option>
						</select></td>
				</tr>
				<tr>
					<td align="center" colspan="3" >
						<input onclick="return confirm('Apakah data tersebut ingin dihapus?')" type="submit" name="submit" value="Delete">
						<a onclick="return confirm('Apakah Anda ingin kembali?')"  href="tampilan.php"><input type="submit" name="reset" value="Kembali"></a>
					</td>
				</tr>
		</form></center>
	</div>
	<div class="footer">
		Copyright &copy; 2017 - Irgi Achmad Fahrezi - Teknik Informatika Universitas Islam Indonesia
	</div>
	</div>
</body>
</html>