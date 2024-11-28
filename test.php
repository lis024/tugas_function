<?php
  
  //function yang tidak mengembalikan nilai
   function Tampilkan(){
     echo "ini adalah fungsi yang tidak mengembalikan nilai";
   }
   Tampilkan();

   //function yang mengembalikan nilai
    function perkalian($nilai1,$nilai2){
        $hasilnya = $nilai1 * $nilai2;
        return $hasilnya;
    }
      echo(perkalian(6,9));
