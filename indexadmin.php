<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Tugas</title>
        <?php
            include "check.php";
        ?>
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
                include "koneksi.php";
                $kueri = "SELECT id,judul,tanggal,sinopsis,isi,gambar FROM tb_view";
                $tampil = mysqli_query($con, $kueri); 
                while ($data = mysqli_fetch_array($tampil))   
                {
                $id = $data[0];
                  $judul = $data[1];
                  $tanggal = $data[2];
                  $sinopsis = $data[3];
                $isi = $data[4];
                $gambar = $data[5];
                
              ?>
                <tr>
                  <td><font color="blue"><h1><?=$judul?></h1></font></td>
                </tr>
                <tr>
                  <td><h4><?=$tanggal?></h4></td>
                </tr>
                <tr>
                  <td><img src="<?=$gambar?>"></td>
                </tr>
                <tr>
                  <td colspan="2"><?=$sinopsis?></td>
                </tr>
                <tr>
                  <td colspan="2" align="right"><a href="diteladmin.php?id=<?php echo $data['id'];?>">(baca selengkapnya)</a><br>
                  </td>
                </tr>
              <?php
              }
              ?>
</table>
                  
              </div>
		      <div class="right">
          <img src="https://media.giphy.com/media/B1ourHmZLMD6w/giphy.gif" width="100%">
          <a href=indexadmin.php>Menu Utama</a><br>
          <a href="logout.php">Logout</a><br>
          <a href="input.php">input</a><br>
          <a href="update.php">Edit</a><br>
          <a href="register.php">Daftar Admin Baru</a><br>
	       </div>
	       <div class="footer">Isi bagian Bawah...</div>
        </div>

    </body>
</html>
