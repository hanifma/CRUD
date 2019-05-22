<?php
$koneksi=mysql_connect("localhost","root","")or die("Gagal connect ke server");
mysql_select_db("dbkaryawan")or die("Gagal membuka database");
?>
<center><H3>DATA KARYAWAN <br> PT. SANDHY PUTRA PURWOKERTO</H3><HR>
<table border=1>
	<tr>
		<td><center>NO. INDUK<br>KARYAWAN</center></td> 
		<td><center>NAMA<BR>KARYAWAN</center></td>
		<td><center>ALAMAT</center></td>
		<td><center>STATUS<BR>KARYAWAN</center></td>
		<td><center>GAJI<BR>POKOK</center></td>
	</tr>
	<?php
	$sql="select * from tkaryawan";
	$hasil=mysql_query($sql,$koneksi)or die("Gagal melakukan Query");
	while ($row=mysql_fetch_array($hasil)) {
		?>
		<tr>
			<td><?php echo $row['nik']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['alamat']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo "Rp. ".$row['gaji']; ?></td>
		</tr>
		<?php
	} 
	mysql_close($koneksi); //HANIFRAKA
	?>
</table>