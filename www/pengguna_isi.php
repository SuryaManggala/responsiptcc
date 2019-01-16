<?php include_once ('template_atas.php') ; ?>
<h2>INPUT ADMIN</h2>
<form method="post" action="input_simpan.php">
	<table border="0">
		<tr>
			<td>USER</td>
			<td><input type="text" name="pengguna" /></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="kata_kunci" /></td>
		</tr>
		<tr>
			<td>NAMA LENGKAP</td>
			<td><input type="text" name="nama_lengkap" /></td>
		</tr>
		<tr>
		<td colspan="2"><input type="submit" value="SIMPAN" /></td>
		</tr>
	</table>
</form>
<?php include_once ('template_bawah.php') ; ?>