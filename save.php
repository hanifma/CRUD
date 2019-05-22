<CENTER><table>
<?php
$host="localhost"; //HANIFRAKA
$user="root";
$password="";
$nik=$_POST ['nik'];
$nama=$_POST ['nama'];
$alamat=$_POST ['alamat'];
$gender=$_POST ['gender'];
$gaji=$_POST ['gaji'];
echo "<h3>PROSES SIMPAN DATA</h3><HR>";
echo "<tr>
		<td>No. Induk Karyawan</td>
		<td>$nik</td>
		</tr>";
echo "<tr>
		<td>Nama Karyawann</td>
		<td>$nama</td>
		</tr>";
echo "<tr>
		<td>Alamat</td>
		<td>$alamat</td>
		</tr>";
echo "<tr>
		<td>Status Karyawan</td>
		<td>$gender</td>
		</tr>";
echo "<tr>
		<td>Gaji</td>
		<td>Rp. $gaji</td>
		</tr>";
echo "<TR><TD COLSPAN=3><hr>";
echo "</table><hr>";
if($nik)
{
	$conn=mysql_connect($host,$user,$password);
	mysql_select_db("dbkaryawan");
	$sql="insert into tkaryawan values ('$nik','$nama','$alamat','$gender','$gaji')";
	$hasil=mysql_query($sql,$conn); echo "Data berhasil disimpan";
}
?>
</CENTER>