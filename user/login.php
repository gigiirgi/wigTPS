<?php
	// session_start();
	include "../koneksi/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<script language='JavaScript'>
		var txt=" Halaman Login [Software WIG TPS] ";
		var speed=250;
		var refresh=null;
			function action() { document.title=txt;
				txt=txt.substring(1,txt.length)+txt.charAt(0);
				refresh=setTimeout("action()",speed);
			}
		action();
</script>
	<link rel="stylesheet" type="text/css" href="../style/login.css">
</head>
<body class="body">
	<nav class="menu-wrap">
				<img src="../img/logoPLN.jpg" class="logo">
				<ul> 
					<li id="nama">PT. PLN(Persero)</li>
				</ul>
	</nav><br> <hr color="#4ba6da">
	<div id="utama">
		<div id="judul">
			Halaman Login
		</div>
		
		<div id="inputan">
			<form method="POST" action="../proses/proses_login.php" >
				<div>
					<input type="text" required name="user" placeholder="Username" class="login" />
				</div>
				<div style="margin-top:10px;">
					<input type="password" required name="pass" placeholder="Password" class="login" />
				</div>
				<div align="center" style="margin-top:10px;">
					<input type="submit" name="login" value="login" class="sub" />
				</div>
			</form>
		</div>
	</div>
<!-- 		<footer class="footer">
			Copyright &copy; 2017 - Irgi Achmad Fahrezi - Teknik Informatika Universitas Islam Indonesia
		</footer> -->
</body>
</html>