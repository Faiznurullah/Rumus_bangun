<?php
include '../model/model.php';
?>
<!doctype html>
 <html lang="id">
  <head>
     <title>Persegi Panjang</title>
  </head>
  <body>
   <center><h2>Menghitung Rumus Persegi Panjang</h2></center>
<form method="post" name="kirim" enctype="multipart/form-data">
<label>Alas:</label>
<input type="number" name="1" placeholder="Panjang...">
<label>Tinggi:</label>
<input type="number" name="2" placeholder="Lebar...">
<input type="submit" name="kirim" value="Kirim">
</form><br>
<?php
$segitiga = $objek_bangun_datar->persegi_panjang();
?>

  </body>
  </html>
