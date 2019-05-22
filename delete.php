<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<center> <h3>Proses Hapus Data</h3><hr>
<?php
$nama=$_POST['nama'];
if($nama)
{
$host="localhost";
$user="root";
$password="";
$conn=mysql_connect($host,$user,$password);
mysql_select_db("dbkaryawan");
$sql="delete from tkaryawan where nama like '$nama'";
$hasil=mysql_query($sql,$conn);
echo "Data siswa dengan nama $nama telah dihapus<hr>";
}
?>
</body>
</html>
//HANIFRAKA