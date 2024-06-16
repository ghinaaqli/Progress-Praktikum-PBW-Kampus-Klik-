<?php
    include "koneksi.php";

    $nama_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi'];
?>

<h3>Form Pencarian</h3>
 
    <form action="index.php" method="get">
	    <label>Cari :</label>
	    <input type="text" name="cari">
	    <input type="submit" value="Cari">
    </form>
 
<?php 
    if(isset($_GET['cari'])){
	    $cari = $_GET['cari'];
	    echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
    <table border="1">
	<tr>
		<th>Nama Mahasiswa</th>
		<th>Prodi</th>
	</tr>

	<?php 
	    if(isset($_GET['cari'])){
		    $cari = $_GET['cari'];
		    $data = mysqli_query($koneksi,"SELECT INTO mahasiswa (nama_mahasiswa, prodi)
                    VALUES ('".$nama_mhs."','".$prodi_mhs."')");				
	    }
	        $no = 1;
	        while($d = mysqli_fetch_array($data)){
	?>
	
        <tr>
		    <td><?php echo $no++; ?></td>
		    <td><?php echo $d['nama']; ?></td>
	    </tr>
	<?php } ?>
</table>