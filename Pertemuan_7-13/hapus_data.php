<?php
    include "koneksi.php";

    $npm = $_GET['id'];

    $proses = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $npm") or die ("Gagal Terkoneksi"($koneksi));

    if($proses) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location.href='index6.php';
            </script>";
    } else echo "
            <script>
                alert('Data Gagal Dihapus');
                window.location.href='index6.php';
            </script>";
?>

