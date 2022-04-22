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
                                    <a href="?page=formulir&aksi=ubah&id=<?php echo $data['id_pengambilan']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah </a>
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