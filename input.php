<html>
<body>
	<form action="save.php" method="post">

		<center><h3>INPUT DATA KARYAWAN</h3><HR>
		<table>
			<tr>
				<td>No. Induk Karyawan</td>
				<td><input type="text" name="nik" size="10"/></td>
			</tr>
			<tr>
				<td>Nama Karyawan</td>
				<td><input type="text" name="nama" size="25"/></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" size="35"/></td>
			</tr>
			<tr>
				<td>Status Karyawan</td>
				<td><input type="radio" name="gender" value="Single" />Single<input type="radio" name="gender" value="Married" />Married</td>
			</tr>
			<tr>
				<td>Gaji</td>
				<td><input type="text" name="gaji" size="10"/></td>
			</tr>
		</table><hr>
		<input type="submit" value="SAVE">
		<input type="reset" value="RESET"></center>
	</form>
</body>
</html>