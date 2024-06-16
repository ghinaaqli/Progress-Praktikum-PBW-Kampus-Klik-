<?php

    include "koneksi.php";
    if(isset($_GET['id'])) {
        $npm = $_GET['id']; 
    }
    
    $proses_ambil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '".$npm."'") or die ("Gagal Terkoneksi"($koneksi));

?>
