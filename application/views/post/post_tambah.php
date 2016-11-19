<!DOCTYPE html>
<html>
<head>
	<title>Post Tambah</title>
</head>
<body>
<center>
	<h3>Tambah Post Baru</h3></center>
	<form method="post" action="<?php echo base_url(). 'post/tambah_aksi'; ?>" >
	<table style="margin:20px auto">
	<tr>
		<td>judul</td>
		<td><input type="text" name="judul"></td>
	</tr>
	<tr>
		<td>Konten</td>
		<td><textarea name="kontent"></textarea></td>
	</tr>
	<tr>
		<td>Tanggal Post</td>
		<td><input type="date" name="tgl_post"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Tambah"></td>
	</tr>
	</table>

</form>
</body>
</html>