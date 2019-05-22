<html>
<body>
<center><form action="delete.php" method="post">
<table>
<?php
$host= "localhost";$user="root";$password="";
$nama=$_POST['nama'];
$conn=mysql_connect($host,$user,$password);
mysql_select_db("dbkaryawan");
$sql="select nama,nik,alamat,gender,gaji from tkaryawan where nama like '$nama%'";
$hasil=mysql_query($sql,$conn);
$row=mysql_fetch_row($hasil);
if($row)
{
	echo"<h3>DATA KARYAWAN YANG AKAN DIHAPUS</h3> <HR>";
	do {
	list ($nama,$nik,$alamat,$gender,$gaji)=$row;
echo "<tr>
		<td>No. Induk Karyawan</td>
		<td>:</td>
		<td>$nik</td>
		</tr>";
echo "<tr>
		<td>Nama Karyawann</td>
		<td>:</td>
		<td>$nama</td>
		</tr>";
echo "<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>$alamat</td>
		</tr>";
echo "<tr>
		<td>Gender</td>
		<td>:</td>
		<td>$gender</td>
		</tr>";
echo "<tr>
		<td>Gaji</td>
		<td>:</td>
		<td>Rp. $gaji</td>
		</tr>";
echo "</table><hr>";
echo"<input type=hidden name=nama value='$nama'>";
	}
	while($row=mysql_fetch_row($hasil));
	echo"</table>";
	echo'<input type=submit value="HAPUS">';
} else {
	echo "data yang dicari tidak ditemukan";
}
?>
</body>
</html>