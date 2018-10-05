<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="DAFTAR"></td>
		</tr>
	</table>
</form>
</body>

<?php
	if (isset($_POST['submit'])) {
		include 'prosesregris.php';
	}

?>


</html>
