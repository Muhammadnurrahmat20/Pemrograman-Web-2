<?php

  if ($txtnim = isset ($_POST["txtnim"]) ? $_POST["txtnim"] : "" 
  AND $txtname = isset  ($_POST["txtname"]) ? $_POST["txtname"] : "" 
  AND $txtstudi = isset ($_POST["txtstudi"]) ? $_POST["txtstudi"] : ""){
    
    echo "<p>Hai, Perkenalkan Nama Saya Adalah : ".$txtname." dengan NIM : ".$txtnim." saya adalah Mahasiswa dari Program Studi : ".$txtstudi;
  }
  else{
    echo("Isi Semua Data, <a href=input.html>Klik Di Sini</a> untuk Kembali" );
  }
?>