<!DOCTYPE html>
<html>
<head>
	<title>User Tambah</title>
</head>
<body>
<center>
	<h3>Tambah Data Baru</h3></center>
	<form method="post" action="<?php echo base_url(). 'user/tambah_aksi'; ?>" >
	<table style="margin:20px auto">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Tambah"></td>
	</tr>
	</table>

</form>
</body>
</html>