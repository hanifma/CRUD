<center><H3>PROSES SIMPAN DATA</H3><hr>
<table>
<?php
$host="localhost" ;$user="root" ;$password="" ;
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$gaji=$_POST['gaji'];
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
echo "<tr><td colspan=3><hr>";
echo "</table><hr>";
if($nik)
{
	$conn=mysql_connect($host,$user,$password);
	mysql_select_db("dbkaryawan");
	$sql="update tkaryawan set nik='$nik',nama='$nama',alamat='$alamat',gender='$gender' where gaji='$gaji' "; 
	$hasil=mysql_query($sql,$conn);
	echo "Data berhasil di update";
}
?>