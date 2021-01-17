<?php
include '../model/model.php';
?>
<!doctype html>
 <html lang="id">
  <head>
     <title>Limas Segitiga</title>
  </head>
  <body>
   <center><h2>Menghitung Volume Limas Segitiga</h2></center>
<form method="post" name="kirim" enctype="multipart/form-data">
<label>Luas Alas:</label>
<input type="number" name="1" placeholder="Luas Alas...">
<label>Tinggi:</label>
<input type="number" name="2" placeholder="Tinggi...">
<input type="submit" name="kirim" value="Kirim">
</form><br>
<?php
$segitiga = $objek_bangun_ruang->limas_segitiga();
?>

  </body>
  </html>
