<CENTER><table><form action="saveedit.php" method="post">
<?php
	$host="localhost";$user="root";$password="";
	$nama=$_POST['nama'];$conn=mysql_connect($host,$user,$password);
	mysql_select_db("dbkaryawan");
	$sql="select nama,nik,alamat,gender,gaji from tkaryawan where nama like '$nama'";
	$hasil=mysql_query($sql,$conn);
	$row=mysql_fetch_row($hasil);
	if ($row)
		{
			echo "<H3>DATA KARYAWAN<hr>";
			do {
				list($nama,$nik,$alamat,$gender,$gaji)=$row;
				echo"<tr><td>No. Induk Karyawan</td><td>:</td><td>
					<input name=nik value='$nik' size=30 ></td></tr>";
				echo"<tr><td>Nama</td><td>:</td><td>
					<input name=nama value='$nama' size=30 ></td></tr>";
				echo"<tr><td>Alamat</td><td>:</td><td>
					<input name=alamat value='$alamat' size=50 ></td></tr>";
				echo"<tr>
				<td>Gender</td><td>:</td>
				<td><input type=radio name=gender value=Single />Single<input type=radio name=gender value=Married />Married</td>
					</tr>";
				echo"<tr><td>Gaji</td><td>:</td><td>
					<input name=gaji value='$gaji' ></td></tr>";
				echo"</table><hr>";
			}
			while($row=mysql_fetch_row($hasil));
				echo"</table>";
				echo'<input type=submit value=SAVE>';
		}
	else {
		echo"Data yang dicari tidak ada";
	}
?>