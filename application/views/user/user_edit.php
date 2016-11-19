<!DOCTYPE html>
<html>
<head>
	<title>User Edit</title>
</head>
<body>
<center> <h3>Edit data</h3> </center>

<?php foreach($user as $u){ ?>

<form action="<?php echo base_url(). 'user/update'; ?>" method="post">
<table style="margin:20px auto;">
	<tr>
		<td>Nama</td>
		<td><input 
		 value="<?php echo $u->nama ?>" type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input 
		value="<?php echo $u->email ?>" type="email" name="email"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input
		value="<?php echo $u->password ?>" type="password" name="password"></td>
	</tr>
	<input type="hidden" name="id" value="<?php echo $u->id_user ?>">

	<tr>
		<td><input type="submit" value="Edit"></td>
	</tr>

</table>
</form>
<?php } ?>



</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>User Edit</title>
</head>
<body>
<center>
	<h3>Edit Data </h3></center>
	<?php foreach($user as $u){ ?>
	<form  action="<?php echo base_url(). 'user/update'; ?>" method="post">
	<table style="margin:20px auto">
	<tr>
		<td>Nama</td>
		<td><input type="text" value="<?php echo $u->nama?> " name="nama"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email" value="<?php echo $u->email?>"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" value="<?php echo $u->password?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Edit"></td>
	</tr>
	</table>
</form>
<?php } ?>
</body>
</html> -->