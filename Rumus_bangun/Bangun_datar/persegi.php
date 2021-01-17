<?php
include '../model/model.php';
?>
<!doctype html>
 <html lang="id">
  <head>
     <title>Persegi</title>
  </head>
  <body>
   <center><h2>Menghitung Rumus Persegi</h2></center>
<form method="post" name="kirim" enctype="multipart/form-data">
<label>Sisi:</label>
<input type="number" name="1" placeholder="Sisi...">
<input type="submit" name="kirim" value="Kirim">
</form><br>
<?php
$segitiga = $objek_bangun_datar->persegi();
?>

  </body>
  </html>
