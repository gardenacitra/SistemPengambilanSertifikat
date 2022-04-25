<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Gunadarma University Computing Center </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/form.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <h1><a href=""> LPUG </a></h1>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </header>
        <!-- /HEADER/ -->
        <!-- BANNER -->
        <section class="banner">
            <div class="banner-center">
                <h2> Informasi Pelayanan Administrasi Kursus LPUG </h2>
                <p> Lembaga Pengembangan Universitas Gunadarma </p>
            </div>
        </section>
        <!-- /BANNER/ -->
        <br></br>
        <!-- FORMULIR -->
        <div class="container">
            <center><h3>Formulir Konfirmasi Pengambilan Sertifikat</h3></center>
            <br></br>
            <form action="">
                <div class="row">
                    <div class="col-25">
                    <label>NIM</label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="nim" placeholder="Masukkan NIM">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Nama</label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="nama" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Kursus</label>
                    </div>
                    <div class="col-75">
                    <select name="kursus">
                        <option> == Pilih Kursus == </option>
                        <option value="sap">SAP</option>
                        <option value="cisco">CISCO</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Periode</label>
                    </div>
                    <div class="col-75">
                    <input type="text" name="periode" placeholder="ex : April 2022">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Hari</label>
                    </div>
                    <div class="col-75">
                    <select name="hari">
                        <option> == Pilih Hari == </option>
                        <option value="selasa">Selasa</option>
                        <option value="kamis">Kamis</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label>Tanggal</label>
                    </div>
                    <div class="col-75">
                    <input type="date" name="tanggal">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
        <!-- /FORMULIR/ -->
        <br></br>
    </body>
</html>

<?php

    if(isset($_POST['submit'])) {
        $sql = $koneksi->query("INSERT INTO tb_pengambilan LEFT JOIN tb_peserta (id_pengambilan, nim, nama, kursus, periode, hari, tanggal)
        VALUES ('$_POST[id_pengambilan]', '$_POST[nim]', '$_POST[nama]', '$_POST[kursus]', '$_POST[periode]', '$_POST[hari]', '$_POST[tanggal]')");

        if ($sql) {
            ?>
            <script type = "text/javascript">
                alert ("Data Berhasil Disimpan");
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