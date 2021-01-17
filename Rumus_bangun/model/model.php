<?php

//ini adalah class bangun datar
 class bangun_datar{

  //ini function untuk bangun datar segitiga
   public function segitiga(){

     //Rumus
     if(isset($_POST['kirim'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = $angka1 * $angka2;

     echo "$angka1 x $angka2 = $aksi Cm";


     }else{
     echo "Silahkan Mengoprasikan";
     }



   }

   //ini function untuk bangun datar segitiga siku_siku
   public function segitiga_siku(){

     //Rumus
     if(isset($_POST['kirim'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = 1/2 * $angka1 * $angka2;

     echo "1/2 x $angka1 x $angka2 = $aksi Cm";


     }else{
     echo "Silahkan Mengoprasikan";
     }

   }

   //ini function untuk bangun datar persegi
   public function persegi(){

     //Rumus
     if(isset($_POST['kirim'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $aksi =$angka1 * $angka1;

     echo "$angka1 x $angka1 = $aksi Cm";


     }else{
     echo "Silahkan Mengoprasikan";
     }

   }

   //ini function untuk bangun datar persegi panjang
   public function persegi_panjang(){

     //Rumus
     if(isset($_POST['kirim'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = $angka1 * $angka2;

     echo "$angka1 x $angka2 = $aksi Cm";


     }else{
     echo "Silahkan Mengoprasikan";
     }

   }

   //ini function untuk bangun datar jajargenjang
   public function jajargenjang(){

     //Rumus
     if(isset($_POST['kirim'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = $angka1 * $angka2;

     echo "$angka1 x $angka2 = $aksi Cm";


     }else{
     echo "Silahkan Mengoprasikan";
     }

   }

   //ini function untuk bangun datar layang-layang
   public function layang_layang(){

     //Rumus
     if(isset($_POST['kirim'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = 1/2 * $angka1 * $angka2;

     echo "1/2 x $angka1 x $angka2 = $aksi Cm";


     }else{
     echo "Silahkan Mengoprasikan";
     }

   }



 }

//ini adalah class bangun ruang
 class bangun_ruang{

   //ini function untuk bangun ruang kubus
   public function kubus(){

     //Rumus
     if(isset($_POST['kirim'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $aksi = $angka1 * $angka1 * $angka1;

      echo "$angka1 x $angka1 x $angka1 = $aksi"."<br>";
      echo "Jadi,Volume Kubus Ini Adalah $aksi";


     }else{
     echo "Silahkan Mengoprasikan";
     }

   }

   //ini function untuk bangun ruang balok
   public function balok(){

     //Rumus
     if(isset($_POST['kirim'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $angka3 = htmlspecialchars($_POST["3"]);
       $aksi = $angka1 * $angka2 * $angka3;

      echo "$angka1 x $angka2 x $angka3 = $aksi"."<br>";
      echo "Jadi,Volume Balok Ini Adalah $aksi";


     }else{
     echo "Silahkan Mengoprasikan";
     }

   }

   //ini function untuk bangun ruang limas segitiga
   public function limas_segitiga(){

     //Rumus
     if(isset($_POST['kirim'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = 1/3 * $angka1 * $angka2;

      echo "1/3 x $angka1 x $angka2 = $aksi"."<br>";
      echo "Jadi,Volume Limas Segitiga Ini Adalah $aksi";


     }else{
     echo "Silahkan Mengoprasikan";
     }

   }

   //ini function untuk bangun ruang prisma
   public function prisma(){

     //Rumus
     if(isset($_POST['kirim'])){
       $angka1 = htmlspecialchars($_POST["1"]);
       $angka2 = htmlspecialchars($_POST["2"]);
       $aksi = 1/2 * $angka1 * $angka2;

      echo "1/2 x $angka1 x $angka2 = $aksi"."<br>";
      echo "Jadi,Volume Prisma Ini Adalah $aksi";


     }else{
     echo "Silahkan Mengoprasikan";
     }


   }




 }

$objek_bangun_datar = new bangun_datar;
$objek_bangun_ruang = new bangun_ruang;

?>
