<?php
$con = mysqli_connect("localhost","root","","imm2023");
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

// database insert SQL code
$sql = "SELECT * FROM `akun2023`";

// insert in database 
$rs = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en-GB">
<head></head>


