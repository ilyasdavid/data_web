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

session_start();

// menghapus session username
unset($_SESSION['username']);

echo "<h1>Anda sudah logout</h1>";
echo "terimakasih telah berkunjung";
?>
</table> 
              </div>
          <div class="right">
          <img src="https://media.giphy.com/media/B1ourHmZLMD6w/giphy.gif" width="100%">
          <a href=index.php>Menu Utama</a><br>
         </div>
         <div class="footer">Isi bagian Bawah...</div>
        </div>

    </body>
</html>
