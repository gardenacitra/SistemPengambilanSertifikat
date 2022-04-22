<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading"> Data Pengambilan Sertifikat </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Kursus</th>
                                    <th>Periode</th>
                                    <th>Hari</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th width="19%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $nomor = 1;
                                $sql = $koneksi->query("SELECT * FROM tb_pengambilan JOIN tb_peserta ON tb_pengambilan.nim = tb_peserta.nim");
                                while ($data = $sql->fetch_assoc()) {
                                ?>

                                <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td><?php echo $data['nim'] ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['kursus']; ?></td>
                                    <td><?php echo $data['periode']; ?></td>
                                    <td><?php echo $data['hari']; ?></td>
                                    <td><?php echo date('d - m - Y', strtotime($data['tanggal'])); ?></td>
                                    <td>
                                        <span class="badge badge-success"><?php echo $data['status']; ?></span>
                                    </td>
                                    <td>
                                        <a name="selesai" class="btn btn-success"><i class="fa fa-check"></i> Selesai </a>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<?php
// if (isset($_POST['selesai'])) {
//     $id_pengambilan = $_GET['id_pengambilan'];

//     $query = $koneksi->query("UPDATE tb_pengambilan SET status = 'Selesai' WHERE id_pengambilan = $id_pengambilan");
// }
?>

<?php

    if (isset($_POST['selesai'])) {

        $sql = $koneksi->query("INSERT INTO tb_pengambilan (id_pengambilan, nim, hari, tanggal, status)
        VALUES ('$_POST[id_pengambilan]', '$_POST[nim]', '$_POST[hari]', '$_POST[tanggal]', '')");

        if ($sql) {
            ?>
            <script type = "text/javascript">
                alert ("Data Berhasil Disimpan");
                window.location.href="?page=pengambilan";
            </script>
            <?php
        }
    }
?>

<?php
    $pengambilan = $_GET['nim'];
    $koneksi->query("UPDATE tb_pengambilan SET status = 'Selesai' WHERE nim = $pengambilan");
?>