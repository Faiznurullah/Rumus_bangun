<?php
include '../model/model.php';
?>
<!doctype html>
 <html lang="id">
  <head>
     <title>Layang-Layang</title>
  </head>
  <body>
   <center><h2>Menghitung Rumus Layang-Layang</h2></center>
<form method="post" name="kirim" enctype="multipart/form-data">
<label>Alas:</label>
<input type="number" name="1" placeholder="Diagonal Pertama...">
<label>Tinggi:</label>
<input type="number" name="2" placeholder="Diagonal Kedua...">
<input type="submit" name="kirim" value="Kirim">
</form><br>
<?php
$segitiga = $objek_bangun_datar->layang_layang();
?>

  </body>
  </html>
