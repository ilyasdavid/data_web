<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>FoodIes</title>
    </head>
    <body>
        <div class="rio">
	       <div class="header" align="center">
            <h1><font face="arial" size="6" color="blue"><b>FOODies</b></font><br>
            <font face="arial" size="5" color="red"><b>Fakultas Kuliner Lampung</b></font>
            </h1>
            <img src="http://68.media.tumblr.com/ec7d581f5624ff2168c65bbc82e25a92/tumblr_inline_mnj1r2aaDh1qz4rgp.gif" width="30%">
</div>
	       <div class="main">
		      <div class="left">
              <img src="http://signsanddecal.com/images/LoaderA_sign.gif" width="100%"><br><p>Search : </p>
              <form><input class="search" type="text" placeholder="Cari..." required><input class="button" type="button" value="Cari"></form>
              
               </div>
		      <div class="middle">
              <table>
<?php
// menjalankan session
session_start();

$username = $_POST['username'];
$password = $_POST['pass'];

include "koneksi.php";

// mencari password terenkripsi berdasarkan username
$query = "SELECT * FROM tbl_user WHERE username = '$username'";
$hasil = mysqli_query($con, $query) or die("Error");
$data  = mysqli_fetch_array($hasil);

$pengacak  = "test";

// cek kesesuaian password terenkripsi dari form login
// dengan password terenkripsi dari database
if ((md5($pengacak . md5($password) . $pengacak)) == $data['password'])
{
    // jika sesuai, maka buat session untuk username
    $_SESSION['username'] = $username;

	// menampilkan menu ke halaman akses
	echo "<h2>Login sukses</h2>";
	echo "<p><a href=\"indexadmin.php\">Halaman Muka Admin</a> | <a href=\"input.php\">Input Data Baru</a></p>";
}
else echo "<h2>Login Gagal</h2>";

?>
</table> 

              </div>
		      <div class="right">
          <img src="https://media.giphy.com/media/B1ourHmZLMD6w/giphy.gif" width="100%">
          <a href=index.php>Menu Utama</a><br>
          <a href="logout.php">Logout</a><br>
	       </div>
	       <div class="footer">Isi bagian Bawah...</div>
        </div>

    </body>
</html>
