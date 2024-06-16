<?php

    $hostname = "localhost";
    $userDataBase = "root";
    $passwordUser = "";
    $dataBaseName = "kuliah_pemrograman_web";

    $koneksi = mysqli_connect($hostname,$userDataBase,$passwordUser,$dataBaseName) or die ("Gagal Terkoneksi") ;
?>  