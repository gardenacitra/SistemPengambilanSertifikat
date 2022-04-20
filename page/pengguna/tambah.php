<div class="panel panel-default">
    <div class="panel-heading"> Tambah Data Pengguna </div> 
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> ID User </label>
                            <input class="form-control" name="id_user" readonly/>  
                        </div>
                        <div class="form-group">
                            <label> Nama Lengkap </label>
                            <input class="form-control" name="nama"/>  
                        </div>
                        <div class="form-group">
                            <label> Username </label>
                            <input class="form-control" name="user"/>      
                        </div>
                        <div class="form-group">
                            <label> Password </label>
                            <input class="form-control" name="pass" type="Password"/>    
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

        $sql = $koneksi->query("INSERT INTO tb_user (nama, username, password, level)
        VALUES ('$_POST[nama]', '$_POST[user]', '$_POST[pass]', '$_POST[level]')");

        if ($sql) {
            ?>
            <script type = "text/javascript">
                alert ("Data Berhasil Disimpan");
                window.location.href="?page=pengguna";
            </script>
            <?php
        }
    }
?>