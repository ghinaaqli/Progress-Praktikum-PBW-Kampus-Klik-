<?php
    include "koneksi.php";

    $proses = mysqli_query($koneksi, "SELECT * FROM mahasiswa") or die ("Gagal Terkoneksi"($koneksi));
?>