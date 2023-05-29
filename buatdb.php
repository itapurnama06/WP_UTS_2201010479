<?php
   include("konfigurasi.php");

   $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);

   if($cnn == true){
       echo"Koneksi Sukses <br>";
       
       $sql1 = "CREATE DATABASE ".DBNAME;
       
       $hasil = mysqli_query($cnn,$sql1);

       if($hasil == true){
           echo"Database ". DBNAME ."<br> Berhasil Dibuat <br>";
       }else{
           echo"Database ". DBNAME ."<br> Gagal Dibuat <br>";
       }

   }else{
       echo " Tidak Sukses ".mysqli_connect_error();
   }
?>
