<div class="panel panel-default">
    <div class="panel-heading"> Tambah Data Sertifikat Kursus SAP </div> 
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
                            <label> Ketersediaan </label>
                            <select class="form-control" name="ketersediaan">
                                <option> == Pilih == </option>
                                <option value="Tersedia">Tersedia</option>
                                <option value="Belum Tersedia">Belum Tersedia</option>
                            </select>
                        </div>
                        <div class="col-md-12 bg-light text-right">
                            <a href="?page=sertifikat_sap&aksi=cancel" class="btn btn-danger"> Kembali </a>
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

        $sql = $koneksi->query("INSERT INTO tb_sertifikat_sap (nim, nama, ketersediaan)
        VALUES ('$_POST[nim]', '$_POST[nama]', '$_POST[ketersediaan]')");

        if ($sql) {
            ?>
            <script type = "text/javascript">
                alert ("Data Berhasil Disimpan");
                window.location.href="?page=sertifikat_sap";
            </script>
            <?php
        }
    }
?>