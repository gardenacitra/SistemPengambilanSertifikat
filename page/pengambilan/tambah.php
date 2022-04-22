<div class="panel panel-default">
    <div class="panel-heading"> Pengambilan </div> 
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> NIM </label>
                            <input class="form-control" name="nim" placeholder="ex : 52419567"/>  
                        </div>
                        <div class="form-group">
                            <label> Nama Lengkap </label>
                            <input class="form-control" name="nama" placeholder="ex : Gardena Citra Puspita"/>  
                        </div>
                        <div class="form-group">
                            <label> Kursus </label>
                            <select class="form-control" name="kursus">
                                <option> == Pilih Kursus == </option>
                                <option value="SAP"> SAP </option>
                                <option value="CISCO"> CISCO </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Periode </label>
                            <input class="form-control" name="periode" placeholder="ex : April 2022"/>    
                        </div>
                        <div class="form-group">
                            <label> Hari </label>
                            <select class="form-control" name="hari">
                                <option> == Pilih Hari == </option>
                                <option value="Selasa"> SELASA </option>
                                <option value="Kamis"> KAMIS </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Tanggal </label>
                            <input class="form-control" type="date" name="tanggal"/>    
                        </div>
                        <div class="col-md-12 bg-light text-right">
                            <a href="?page=&aksi=" class="btn btn-danger"> Kembali </a>
                            <input type="submit" name="simpan" value="Ajukan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>  
</div>

<?php

    if (isset($_POST['simpan'])) {

        $sql = $koneksi->query("INSERT INTO tb_pengambilan (id_pengambilan, nim, hari, tanggal, status)
        VALUES ('$_POST[id_pengambilan]', '$_POST[nim]', '$_POST[hari]', '$_POST[tanggal]', 'pending')");

        if ($sql) {
            ?>
            <script type = "text/javascript">
                alert ("Data Berhasil Disimpan");
                window.location.href="?page=";
            </script>
            <?php
        }
    }
?>