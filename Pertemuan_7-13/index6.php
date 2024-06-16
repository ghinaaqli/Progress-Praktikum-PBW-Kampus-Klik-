<?php
    include "tampil_data.php";
    include "edit_data.php";

    $data_edit = mysqli_fetch_assoc($proses_ambil);
?>


<html>
    <header>
        <title>
        </title>
        <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="library/assets/styles.css" rel="stylesheet" media="screen">
        <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </header>

        <body>

            <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Input Nilai Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">


                                    <form action="proses.php" method="POST" class="form-horizontal">
                                      <fieldset>
                                        <legend>Input Nilai Mahasiswa</legend>

                                        <div class="control-group">
                                          <label class="control-label" for="NPM">NAMA MAHASISWA</label>
                                          <div class="controls">
                                            <input type="hidden" class="input-xlarge focused" id="NPM" name="nama" 
                                            value="<?php if($data_edit['id'] != "") echo $data_edit['id']; ?>"></input>

                                            <input type="text" class="input-xlarge focused" id="NPM" name="nama" 
                                            value="<?php if($data_edit['nama_mahasiswa'] != "") echo $data_edit['nama_mahasiswa']; ?>"></input>
                                            
                                        </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="NPM">PRODI MAHASISWA</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="NPM" name="prodi"
                                            value="<?php if($data_edit['prodi'] != "") echo $data_edit['prodi']; ?>"></input>

                                          </div>
                                        </div>

                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Proses</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Mahasiswa</div>
                                
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>NPM Mahasiswa</th>
						                  <th>Nama Mahasiswa</th>
						                  <th>Prodi Mahasiswa</th>
						                  <th>Aksi</th>
						                </tr>
						              </thead>
						              <tbody>

                                      <?php
                                            while($data = mysqli_fetch_assoc($proses)) {
                                      ?>
						                <tr>
						                  <td> <?php echo $data['id']?> </td>
						                  <td> <?php echo $data['nama_mahasiswa']?> </td>
						                  <td> <?php echo $data['prodi']?> </td>
						                  <td> <a href="index6.php?id=<?php echo $data['id']?>"> Edit </a> | 
                                            <a href="hapus_data.php?id=<?php echo $data['id']?>"> Hapus </a></td>
						                </tr>

                                      <?php
                                            }
                                      ?>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                </div>
            
        </body>
</html>