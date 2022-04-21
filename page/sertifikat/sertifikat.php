<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading"> Data Sertifikat Kursus </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <div>
                            <a href="?page=sertifikat&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data </a>
                        </div><br>
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Kursus</th>
                                    <th>Ketersediaan</th>
                                    <th width="19%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $nomor = 1;
                                $sql = $koneksi->query("SELECT * FROM tb_sertifikat");
                                while ($data = $sql->fetch_assoc()) {
                                ?>

                                <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td><?php echo $data['nim'] ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['kursus']; ?></td>
                                    <td><?php echo $data['ketersediaan']; ?></td>
                                    <td>
                                        <a href="?page=sertifikat&aksi=ubah&nim=<?php echo $data['nim']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah </a>
                                        <a onclick="return confirm('Anda yakin ingin menghapus ?')" href="?page=sertifikat&aksi=hapus&nim=<?php echo $data['nim']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus </a>
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