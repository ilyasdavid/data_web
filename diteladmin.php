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
                  include "koneksi.php";
              $id = $_GET['id'];
              $ditel = "SELECT * FROM tb_view where id='$id'";
              $tampil = mysqli_query($con, $ditel);
              $data = mysqli_fetch_array($tampil);
              echo "<td><?=$id?></td>";
              ?>
              <tr>
                    <td align="center"><h2><b><?php echo $data['judul']; ?></td></h2></b>
                  </tr>
                  <tr>
                    <td align="center"><?php echo $data['tanggal']; ?></td>
                  </tr>
                  
                  <tr>
                    <td align="center">
                    <img src=<?php echo $data['gambar'];?>></td>
                  </tr>
                  <tr>
                    <td><?php echo $data['sinopsis']; ?></td>
                  </tr>
                    <tr style="border : 2px solid blue">
                      <td style="border : 2px solid black"><?php echo $data['isi']; ?></td>
                  </tr>
            </table> 

              </div>
		      <div class="right">
          <img src="https://media.giphy.com/media/B1ourHmZLMD6w/giphy.gif" width="100%">
          <a href=indexadmin.php>Menu Utama</a><br>
          <a href="logout.php">Logout</a><br>
          <a href="input.php">input</a><br>
          <a href="update.php?id=<?php echo $data['id'];?>">Edit</a><br>
          <a href="register.php">Daftar Admin Baru</a><br>
	       </div>
	       <div class="footer">Isi bagian Bawah...</div>
        </div>

    </body>
</html>
