<?php
	$nim = $_GET['nim'];
	$sql = $koneksi->query("SELECT * FROM tb_sertifikat WHERE nim = '$nim'");
	$data = $sql->fetch_assoc();
?>

<div class="panel panel-default">
    <div class="panel-heading"> Ubah Data Sertifikat Kursus </div> 
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> NIM </label>
                            <input class="form-control" name="nim" value="<?php echo $data['nim']; ?>" readonly/>  
                        </div>
                        <!-- <div class="form-group">
                            <label> Nama </label>
                            <input class="form-control" name="nama" value="<?php echo $data['nama']; ?>" readonly/>  
                        </div> -->
                        <!-- <div class="form-group">
                            <label> Kursus </label>
                            <select class="form-control" name="kursus">
                                <option> == Pilih == </option>
                                <option value="sap">SAP</option>
                                <option value="cisco">CISCO</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label> Keterangan </label>
                            <select class="form-control" name="ketersediaan">
                                <option> == Pilih == </option>
                                <option value="tersedia">Tersedia</option>
                                <option value="belum-tersedia">Belum Tersedia</option>
                            </select>
                        </div>
                        <div class="col-md-12 bg-light text-right">
                            <a href="?page=sertifikat&aksi=cancel" class="btn btn-danger"> Kembali </a>
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

        $sql = $koneksi->query("UPDATE tb_sertifikat SET 
        nim = '$_POST[nim]', ketersediaan = '$_POST[ketersediaan]' WHERE nim = '$nim'");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=sertifikat";
                </script>
            <?php
        } else {
            ?>
            <script type = "text/javascript">
                alert ("Data Gagal Disimpan");
                window.location.href="?page=sertifikat";
            </script>
            <?php
        }
    }
?>