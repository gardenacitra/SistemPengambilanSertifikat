<?php
	$nim = $_GET['nim'];
	$sql = $koneksi->query("SELECT * FROM tb_peserta_cisco WHERE nim = '$nim'");
	$data = $sql->fetch_assoc();
?>

<div class="panel panel-default">
    <div class="panel-heading"> Ubah Data Peserta Kursus </div> 
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> NIM </label>
                            <input class="form-control" name="nim" value="<?php echo $data['nim']; ?>"/>  
                        </div>
                        <div class="form-group">
                            <label> Nama </label>
                            <input class="form-control" name="nama" value="<?php echo $data['nama']; ?>"/>  
                        </div>
                        <div class="form-group">
                            <label> Jurusan </label>
                            <input class="form-control" name="jurusan" value="<?php echo $data['jurusan']; ?>"/>      
                        </div>
                        <div class="form-group">
                            <label> No Telepon </label>
                            <input class="form-control" name="no_telepon" value="<?php echo $data['no_telepon']; ?>"/>    
                        </div>
                        <div class="form-group">
                            <label> Email </label>
                            <input class="form-control" name="email" type="email" value="<?php echo $data['email']; ?>"/>    
                        </div>
                        <div class="form-group">
                            <label> Periode </label>
                            <input class="form-control" name="periode" value="<?php echo $data['periode']; ?>"/>    
                        </div>
                        <div class="col-md-12 bg-light text-right">
                            <a href="?page=peserta_cisco&aksi=cancel" class="btn btn-danger"> Kembali </a>
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

        $sql = $koneksi->query("UPDATE tb_peserta_cisco SET 
        nim = '$_POST[nim]', nama = '$_POST[nama]', jurusan = '$_POST[jurusan]', no_telepon = '$_POST[no_telepon]', email = '$_POST[email]', periode = '$_POST[periode]' WHERE nim = '$nim'");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=peserta_cisco";
                </script>
            <?php
        }
    }
?>