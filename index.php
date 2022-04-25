<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM tb_sertifikat LEFT JOIN tb_peserta ON tb_sertifikat.nim = tb_peserta.nim WHERE CONCAT ('nim', 'nama', 'kursus', 'ketersediaan') LIKE '%".$valueToSearch."%'";
    $seacrh_result = filterTable($query);
} else {
    $query = "SELECT * FROM tb_sertifikat LEFT JOIN tb_peserta ON tb_sertifikat.nim = tb_peserta.nim";
    $seacrh_result = filterTable($query);
}

function filterTable($query)
{
    $koneksi = new mysqli("localhost", "root", "", "db_sistemlab");
    $filter_Result = mysqli_query($koneksi, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Gunadarma University Computing Center </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/table.css">
        <link rel="stylesheet" href="css/search.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <!-- SIDEBAR -->
        <input type="checkbox" id="check">
        <div class="sidebar">
            <ul>
                <li><a href="#confirm">Konfirmasi Pengambilan</a></li>
                <li><a href="#about"> Jadwal Pelayanan </a></li>
                <li><a href="#contact"> Contact </a></li>
            </ul>
        </div>
        <!-- /SIDEBAR/ -->

        <!-- HEADER -->
        <header>
            <div class="container"> 
                <h1><a href=""> LPUG </a></h1>
                <ul>
                    <li><a href="#confirm">Konfirmasi Pengambilan</a></li>
                    <li><a href="#about">Jadwal Pelayanan</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <!-- MENU MOBILE -->
                <label for="check" class="mobile-menu"><i class="fa-solid fa-bars fa-2x"></i></i></label>
            </div>
        </header>
        <!-- /HEADER/ -->

        <!-- BANNER -->
        <section class="banner">
            <div class="container">
                <div class="banner-center">
                    <h2> Informasi Pelayanan Administrasi Kursus LPUG </h2>
                    <p> Lembaga Pengembangan Universitas Gunadarma </p>
                </div>
            </div>
        </section>
        <!-- /BANNER/ -->

        <!-- SEARCH SERTIFIKAT -->
        <section>
            <div class="container">
                <h3> Search Sertifikat </h3>
                <br></br>
                <form action="index.php" method="POST">
                    <input type="text" name="valueToSearch" placeholder="Search ..." aria-label="Search">
                    <button type="submit" name="search"> Search </button>
                </form>
                <br></br>
                <table border="1">
                    <tr>
                        <th width="50">No</th>
                        <th width="150">NIM</th>
                        <th width="350">Nama</th>
                        <th width="150">Kursus</th>
                        <th width="150">Keterangan</th>
                    </tr>

                    <?php
                    $nomor = 1;
                    // $sql = $koneksi->query("SELECT * FROM tb_sertifikat INNER JOIN tb_peserta ON tb_sertifikat.nim = tb_peserta.nim INNER JOIN tb_pengambilan ON tb_sertifikat.nim = tb_pengambilan.nim");
                    // while($data = $sql->fetch_assoc()) {
                    while($data = mysqli_fetch_array($seacrh_result)) {
                    ?>

                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['kursus']; ?></td>
                        <td><?php echo $data['ketersediaan']; ?></td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
        </section>
        <!-- /SEARCH SERTIFIKAT/ -->

        <!-- KONFIRMASI PENGAMBILAN -->
        <section id="confirm">
            <div class="container">
                <h3> Konfirmasi Pengambilan </h3>
                <br></br>
                <center><p>Klik tombol dibawah untuk melakukan perjanjian hari dan tanggal pengambilan Sertifikat</p></center>
                <br></br>
                <center><a href="formulir.php"><button type="submit"> Konfirmasi </button></a></center>
            </div>
        </section>
        <!-- /KONFIRMASI PENGAMBILAN/ -->

        <!-- ABOUT -->
        <section id="about">
            <div class="container">
                <h3> Jadwal Pelayanan </h3>
                <p>Pengambilan sertifikat dapat dilakukan di D431 pada hari Selasa dan Kamis pukul 12.00 - 15.00 WIB.</p>
                <br>
                <p>Pengambilan Sertifikat Kursus :</p>
                <p>1. Konfirmasi via telp / email, apakah sudah tercetak atau belum.</p>
                <p>2. Pengambilan di kampus D431.</p>
                <p>Pelayanan 1 dan 2, hari Selasa dan Kamis pukul 12.00 - 15.00 WIB.</p>
                <br>
                <p>Untuk konfirmasi :</p>
                <p>Siapkan Identitas Diri dan Bukti Bayar Kursus</p>
            </div>
        </section>
        <!-- /ABOUT/ -->

        <!-- CONTACT -->
        <section id="contact">
            <div class="container">
                <h3> Contact </h3>
                <div class="col-3">
                    <h4> Alamat </h4>
                    <p>Universitas Gunadarma Kampus D431 </p>
                </div>
                <div class="col-3">
                    <h4> Email </h4>
                    <p> tsgucc2014@gmail.com </p>
                </div>
                <div class="col-3">
                    <h4> Telp </h4>
                    <p>021 7888 1112 ext 447</p>
                </div>
            </div>
        </section>
        <!-- /CONTACT/ -->

        <!-- FOOTER -->
        <footer>
            <div class="container">
                <small> Copyright &copy; 2022 - Gardena Citra </small>
            </div>
        </footer>
        <!-- /FOOTER/ -->
    </body>
</html>