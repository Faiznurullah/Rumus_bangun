<?php
include '../model/model.php';
?>
<!doctype html>
 <html lang="id">
  <head>
     <title>Prisma</title>
  </head>
  <body>
   <center><h2>Menghitung Volume Prisma</h2></center>
<form method="post" name="kirim" enctype="multipart/form-data">
<label>Panjang:</label>
<input type="number" name="1" placeholder="Luas Alas...">
<label>Lebar:</label>
<input type="number" name="2" placeholder="Tinggi Prisma...">
<input type="submit" name="kirim" value="Kirim">
</form><br>
<?php
$segitiga = $objek_bangun_ruang->prisma();
?>

  </body>
  </html>
