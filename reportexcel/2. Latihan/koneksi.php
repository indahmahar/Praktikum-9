<?php 
	$host="localhost";
	$username="root";
	$password="";
	$database="db_siswa";

	//createconnection
	$koneksi= mysqli_connect($host, $username, $password, $database) or die("Koneksi Gagal Dibangun");
	//check connection
	mysqli_select_db($koneksi,$database) or die(mysqli_connect_error("koneksi error"));
 ?>