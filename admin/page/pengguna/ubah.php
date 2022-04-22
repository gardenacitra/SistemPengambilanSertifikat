<?php
	$id_user = $_GET['id'];
	$sql = $koneksi->query("SELECT * FROM tb_user WHERE id_user = '$id_user'");
	$data = $sql->fetch_assoc();
?>

<div class="panel panel-default">
    <div class="panel-heading"> Ubah Data Pengguna </div> 
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> ID User </label>
                            <input class="form-control" name="id" value="<?php echo $data['id_user']; ?>" readonly/>  
                        </div>
                        <div class="form-group">
                            <label> Nama Lengkap </label>
                            <input class="form-control" name="nama" value="<?php echo $data['nama']; ?>"/>  
                        </div>
                        <div class="form-group">
                            <label> Username </label>
                            <input class="form-control" name="user" value="<?php echo $data['username']; ?>"/>      
                        </div>
                        <div class="form-group">
                            <label> Password </label>
                            <input class="form-control" name="pass" type="Password" value="<?php echo $data['password']; ?>"/>    
                        </div>
                        <div class="form-group">
                            <label> Level Akses </label>
                            <select class="form-control" name="level">
                                <option> == Pilih Akses Level == </option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>   
                            </select>
                        </div>
                        <div class="col-md-12 bg-light text-right">
                            <a href="?page=pengguna&aksi=cancel" class="btn btn-danger"> Kembali </a>
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

        $sql = $koneksi->query("UPDATE tb_user SET 
        id_anggota = '$_POST[id]', nama = '$_POST[nama]', username = '$_POST[user]', password = '$_POST[pass]', level = '$_POST[level]' WHERE id = '$id_user'");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=pengguna";
                </script>
            <?php
        }
    }
?>