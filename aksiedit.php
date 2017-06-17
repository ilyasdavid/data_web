<?php  
	$id = $_POST['id'];
	$judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $sinopsis = $_POST['sinopsis'];
    $lokasi = $_POST['gambar'];
    $tanggal = date("Y-m-d");
	include "koneksi.php";
      
  $update="UPDATE tb_view SET judul='$judul', tanggal ='$tanggal', sinopsis = '$sinopsis', isi = '$isi', gambar = '$lokasi' WHERE id='$id'";  
  
  mysqli_query($con,$update);  
      
  echo "<center>Data Berhasil Di Update<center>";  
  echo "<center><h3><a href=indexadmin.php>
	Kembali</a></h3></center>";  
?>