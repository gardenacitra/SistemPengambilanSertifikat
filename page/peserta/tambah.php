<div class="panel panel-default">
    <div class="panel-heading"> Tambah Data Peserta Kursus </div> 
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> NIM </label>
                            <input class="form-control" name="nim"/>  
                        </div>
                        <div class="form-group">
                            <label> Nama </label>
                            <input class="form-control" name="nama"/>  
                        </div>
                        <div class="form-group">
                            <label> Jurusan </label>
                            <input class="form-control" name="jurusan"/>      
                        </div>
                        <div class="form-group">
                            <label> No Telepon </label>
                            <input class="form-control" name="pass" type="no_telepon"/>    
                        </div>
                        <div class="form-group">
                            <label> Email </label>
                            <input class="form-control" name="pass" type="email"/>    
                        </div>
                        <div class="form-group">
                            <label> Kursus </label>
                            <select class="form-control" name="level">
                                <option> == Pilih Kursus == </option>
                                <option value="SAP">SAP</option>
                                <option value="CISCO">CISCO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Periode </label>
                            <input class="form-control" name="pass" type="periode"/>    
                        </div>
                        <div class="col-md-12 bg-light text-right">
                            <a href="?page=peserta&aksi=cancel" class="btn btn-danger"> Kembali </a>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>  
</div>

<?php

    if (isset($_POST['simpan'])) {

        $sql = $koneksi->query("INSERT INTO tb_peserta (nim, nama, jurusan, no_telepon, email, kursus, periode)
        VALUES ('$_POST[nim]', '$_POST[nama]', '$_POST[jurusan]', '$_POST[no_telepon]', '$_POST[email]', '$_POST[kursus]', '$_POST[periode]')");

        if ($sql) {
            ?>
            <script type = "text/javascript">
                alert ("Data Berhasil Disimpan");
                window.location.href="?page=peserta";
            </script>
            <?php
        }
    }
?>