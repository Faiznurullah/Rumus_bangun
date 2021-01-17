<?php
include '../model/model.php';
?>
<!doctype html>
 <html lang="id">
  <head>
     <title>Kubus</title>
  </head>
  <body>
   <center><h2>Menghitung Volume Kubus</h2></center>
<form method="post" name="kirim" enctype="multipart/form-data">
<label>Panjang Sisi:</label>
<input type="number" name="1" placeholder="Panjang Sisi...">
<input type="submit" name="kirim" value="Kirim">
</form><br>
<?php
$segitiga = $objek_bangun_ruang->kubus();
?>

  </body>
  </html>
