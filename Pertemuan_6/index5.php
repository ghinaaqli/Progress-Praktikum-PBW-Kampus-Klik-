<?php

    $var1 = $_GET['inputan_pertama'];
    echo $var1;

?>

<html>
    <header>
        <title>
        </title>
    </header>

        <body>

            <form action="" method="GET" >

                <input type="text" name="inputan_pertama" value=""></input>

                <button type="submit" name="proses_data">
                    PROSES DATA
                </button>

            </form>

        </body>
</html>

<!--  
    ketika action didalam form tidak diisi/dikosongkan
    maka dia akan mengeksekusi/megirimkan pada skrip php dlm satu dokumen dengan file html nya.

-->

<!-- 
   Ketika kita membuat form username atau password kita menggunakan method POST agar tidak terlihat,
   sedangkan untuk form halaman kita menggunakan GET agar user bisa mengubah langsung di URL nya. 
-->