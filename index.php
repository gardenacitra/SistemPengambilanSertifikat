<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Perpustakaan</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

        <!-- SIDEBAR -->
        <input type="checkbox" id="check">
        <div class="sidebar">
            <ul>
                <li><a href="#about">About</li>
                <li><a href="#contact">Contact</li>
            </ul>
        </div>

        <!-- HEADER -->
        <header>
            <div class="container">
                <h1><a href="">Perpustakaan</a></h1>
                <ul>
                    <li><a href="#about">About</li>
                    <li><a href="#contact">Contact</li>
                </ul>

                <!-- MENU MOBILE -->
                <label for="check" class="mobile-menu"><i class="fa-solid fa-bars fa-2x"></i></i></label>
            </div>
        </header>

        <!-- BANNER -->
        <section class="banner">
            <div class="container">
                <div class="banner-center">
                    <h2>Sistem Informasi Perpustakaan<br>
                    <!-- <span class="efek-ngetik"></span></h2> -->
                    <p>SMA Negeri 2 Gunung Putri Bogor</p>
                </div>
            </div>
        </section>

        <!-- SEARCH BOOK -->
        <section>
            <div class="container">
                <h3>Search Book</h3>
                <table>
                    
                </table>
            </div>
        </section>

        <!-- ABOUT -->
        <section id="about">
            <div class="container">
                <h3>About</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </section>

        <!-- CONTACT -->
        <section id="contact">
            <div class="container">
                <h3>contact</h3>
                <div class="col-3">
                    <h4>Alamat</h4>
                    <p>Kota Wisata Cibubur</p>
                </div>
                <div class="col-3">
                    <h4>Email</h4>
                    <p>sman2gunungputri@gmail.com</p>
                </div>
                <div class="col-3">
                    <h4>Telp</h4>
                    <p>021 1234 5678</p>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer>
            <div class="container">
                <small>Copyright &copy; 2022 - Gardena Citra</small>
            </div>
        </footer>

        <script src="js/script.js"></script>

    </body>
</html>