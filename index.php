﻿<?php
    error_reporting(0);
    session_start();

    $koneksi = new mysqli("localhost","root","","db_sistemlab");

    include "function.php";

    if($_SESSION['admin'] || $_SESSION['petugas']) {  
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Gunadarma University Computing Center </title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"> LPUG </a> 
                </div>
                <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> 
                    <?php echo date('d F Y'); ?> 
                </div>
            </nav>   
            <!-- NAV SIDE ADMIN -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                        </li>
                        <li>
                            <a class="active-menu" href="index.php"><i class="fa fa-home fa-2x"></i> Dashboard </a>
                        </li>
                        <li>
                            <a href="?page=pengguna&aksi="><i class="fa fa-user fa-2x"></i> Data Pengguna </a>
                        </li>                                    
                        <li>
                            <a href="#"><i class="fa fa-user fa-2x"></i> Data Peserta Kursus <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=peserta&aksi="> SAP </a>
                                </li>
                                <li>
                                    <a href="?page=peserta&aksi="> CISCO </a>
                                </li>                            
                            </ul>
                        </li>  
                        <li>
                            <a href="#"><i class="fa fa-file fa-2x"></i> Data Sertifikat <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=sertifikat&aksi="> SAP </a>
                                </li>
                                <li>
                                    <a href="?page=sertifikat&aksi=cisco"> CISCO </a>
                                </li>                          
                            </ul>
                        </li> 
                        <li>
                            <a href="?page=pengambilan&aksi="><i class="fa fa-calendar fa-2x"></i> Jadwal Pengambilan </a>
                        </li>
                        <li>
                            <a href="logout.php"> Logout </a>
                        </li>
                    </ul>
                </div>
            </nav>  
            <!-- /NAV SIDE ADMIN/ -->

            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                        <?php
                            $kursus = $_GET['kursus'];

                            $page = '';
                            if(isset($_GET['page'])) {
                                $page = $_GET['page'];
                            } else {
                                $page = '';
                            }

                            $aksi = '';
                            if(isset($_GET['aksi'])) {
                                $aksi = $_GET['aksi'];
                            } else {
                                $aksi = '';
                            }

                            if ($page == "peserta") {
                                if ($aksi == "" || $aksi == "cancel") {
                                    include "page/peserta/peserta.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/peserta/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/peserta/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/peserta/hapus.php";
                                } elseif ($aksi == "cetak") {
                                    include "page/peserta/form_laporan_peserta.php";
                                } 
                            } elseif ($page == "pengguna" ) {
                                if ($aksi == "" || $aksi == "cancel") {
                                    include "page/pengguna/pengguna.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/pengguna/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/pengguna/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/pengguna/hapus.php";
                                }
                            } elseif ($page == "sertifikat" ) {
                                if ($aksi == "" || $aksi == "cancel") {
                                    include "page/sertifikat/sertifikat.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/sertifikat/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/sertifikat/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/sertifikat/hapus.php";
                                }
                            } elseif ($page == "pengambilan" ) {
                                if ($aksi == "" || $aksi == "cancel") {
                                    include "page/pengambilan/pengambilan.php";
                                } elseif ($aksi == "ambil") {
                                    include "page/pengambilan/tambah.php";
                                }
                            } elseif ($page == "") {
                                include "home.php";
                            }
                        ?>
                        </div>
                    </div>                  
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>

        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
                $(document).ready(function () {
                    $('#dataTables-example').dataTable();
                });
        </script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>
    </body>
</html>

<?php
    } else {
        header("location:login.php");
    }
?>