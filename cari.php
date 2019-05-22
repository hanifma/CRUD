<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<center> <h3>HASIL PENCARIAN DATA</h3><hr>
<table border=0>
<?php
$host="localhost";$user="root";$password="";
$conn=mysql_connect($host,$user,$password);
mysql_select_db("dbkaryawan");
$nm=$_POST['nama'];
$sql="select nama,nik,alamat,gender,gaji from tkaryawan
where nama like '$nm%'";
$hasil=mysql_query($sql,$conn);
$row=mysql_fetch_row($hasil);
if(!$row)
{
echo "data yang dicari tidak ditemukan/belum direkam...";
} else{
do{
list($nama,$nik,$alamat,$gender,$gaji)=$row;
echo "<tr>
		<td>No. Induk Karyawan</td>
		<td>:</td>
		<td>$nik</td>
		</tr>";
echo "<tr>
		<td>Nama Karyawan</td>
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
}
while ($row=mysql_fetch_row($hasil));
}
?>
</body>
</html>
