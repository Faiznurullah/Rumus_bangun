<?php
include '../model/model.php';
?>
<!doctype html>
 <html lang="id">
  <head>
     <title>Segitiga</title>
  </head>
  <body>
   <center><h2>Menghitung Rumus Segitiga</h2></center>
<form method="post" name="kirim" enctype="multipart/form-data">
<label>Alas:</label>
<input type="number" name="1" placeholder="Alas Segitiga...">
<label>Tinggi:</label>
<input type="number" name="2" placeholder="Tinggi Segitiga...">
<input type="submit" name="kirim" value="Kirim">
</form><br>
<?php
$segitiga = $objek_bangun_datar->segitiga();
?>

  </body>
  </html>
