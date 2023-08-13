<?php

$con = mysqli_connect("localhost","root","","imm2023");
if($con==false){
	echo "Can't connect db";
	echo "<br>";
}else
// echo "Connect success";
// echo "<br>";

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

// get the post records
$txtNama = $_POST['varNama'];
$txtNim = $_POST['varNim'];
// $txtAngkatan = $_POST['varAngkatan'];
$txtAlamat = $_POST['varAlamat'];
$agama = $_POST['agama'];
$Kelamin = $_POST['Kelamin'];
$tujuan_masuk = $_POST['tujuan_masuk'];
$prodi=$_POST['prodi'];

// database insert SQL code
$sql = "INSERT INTO `akun2023` (`NIM`, `Angkatan`,  `nama`, `alamat`, `agama`, `jeniskelamin`, `prodi`, `tujuan_masuk`)  VALUES ('$txtNim', '2023', '$txtNama', '$txtAlamat', '$agama', '$Kelamin', '$prodi', '$tujuan_masuk')";
// INSERT INTO `akun2023` (`NIM`, `nama`, `alamat`, `agama`, `jeniskelamin`, `prodi`, `tujuan_masuk`, `Angkatan`)
// VALUES ('22222222', 'Fariz', '11111', 'Islam', 'L', 'Teknik Informatika', 'qqqqqq', '2023')
// insert in database 
$pushtoDB= mysqli_query($con,$sql);
// $rs = mysqli_query($con, $sql);

if($pushtoDB){
	echo "Records Inserted";
}
else{
	echo "Data can't record";
}
?>