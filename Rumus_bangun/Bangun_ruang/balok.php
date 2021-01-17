<?php
include '../model/model.php';
?>
<!doctype html>
 <html lang="id">
  <head>
     <title>Balok</title>
  </head>
  <body>
   <center><h2>Menghitung Volume Balok</h2></center>
<form method="post" name="kirim" enctype="multipart/form-data">
<label>Panjang:</label>
<input type="number" name="1" placeholder="Panjang...">
<label>Lebar:</label>
<input type="number" name="2" placeholder="lebar...">
<label>Tinggi:</label>
<input type="number" name="3" placeholder="Tinggi...">
<input type="submit" name="kirim" value="Kirim">
</form><br>
<?php
$segitiga = $objek_bangun_ruang->balok();
?>

  </body>
  </html>
