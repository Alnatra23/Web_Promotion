<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Web</title>
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <style>
        .navbar {
            position: relative;
            z-index: 1;
        }

        .navbar-brand {
            font-family: Viga;
            font-size: 32px;
        }

        .nav-link {
            text-transform: uppercase;
            margin-right: 30px;
        }

        .nav-link:hover::after {
            content: '';
            display: block;
            border-bottom: 3px solid #ffffff;
            width: 50%;
            margin: auto;
            padding-bottom: 5px;
            margin-bottom: -8px;

        }

        .tombol {
            text-transform: uppercase;
            border-radius: 40px;
        }

        .jumbotron {
            background-image: url(assets/Peman1.jpg);
            background-size: cover;
            height: 640px;
            margin-top: -75px;
            text-align: center;
            position: relative;
        }

        .jumbotron .container {
            z-index: 1;
            position: relative;
        }

        .jumbotron .display-4 {
            color: white;
            margin-top: 150px;
            font-weight: 200;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
            margin-bottom: 30px;
        }

        .jumbotron .display-4 span {
            font-weight: 500;
        }

        .jumbotron::after {
            content: '';
            display: block;
            width: 100%;
            height: 80%;
            background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
            position: absolute;
            bottom: 0;

        }

        .info-panel {
            background-color: white;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
            border-radius: 12px;
            margin-top: -120px;
            background-color: white;
            padding: 30px;
        }

        .info-panel img {
            width: 80px;
            height: 80px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .info-panel h4 {
            font-size: 16px;
            text-transform: uppercase;
            font-weight: bold;
            margin-top: 5px;
        }

        .info-panel p {
            font-size: 14px;
            color: #ACACAC;
            margin-top: -5px;
            font-weight: 200;
        }

        .row Labuan {
            margin-top: 120px;
            size: landscape;
        }

        .Labuan h3 {
            font-size: 52px;
            font-weight: 200;
            text-transform: uppercase;
            margin-top: 100px;

        }

        .img-bajo {
            border-radius: 10%;
            margin-top: 70px;
        }

        .Labuan p {
            font-size: 15px;
            color: #ACACAC;
            font-weight: 220;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand"
           href="http://localhost:63342/XIR5/Test%20Website/pol-3/index.html?_ijt=7gtonoi9s4u648cm4uj2j2jb6&_ij_reload=RELOAD_ON_SAVE">Alnatra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="price.html">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Feature.html">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary tombol">Join Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"><span>Wisata Masalalu</span> Bukan Bersamamu Hanya Dengan <span>Kenanganmu</span></h1>
        <a href="https://goo.gl/maps/fVQoJudY8BacVYhK7" class="btn btn-primary tombol">Meluncur</a>
    </div>
</div>
<!--Akhir-->


<!--Con-->
<div class="container">

    <!--Info-->
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
                <div class="col-lg">
                    <img src="assets/Sty.jfif" alt="Liburan" class="float-left">
                    <h4>Stay in Hotel</h4>
                    <p>Menginap di hotel</p>

                </div>
                <div class="col-lg">
                    <img src="assets/Vaca.jfif" alt="Liburan" class="float-left">
                    <h4>Just Vacation</h4>
                    <p>Liburan Semalam</p>

                </div>
            </div>
        </div>
    </div>

    <!--workspace-->
    <div class="row Labuan">
        <div class="col-7">
            <img src="assets/Bajo.jpg" alt="Labuan Bajo" class="img-bajo">
        </div>
        <div class="col-5">
            <h3><span>Wisata</span> Liburan Labuan Bajo</h3>
            <p>Labuan Bajo merupakan salah satu kota yang berada di kecamatan Komodo, Kabupaten Manggarai Barat,
                provinsi Nusa Tenggara Timur, Indonesia. Kota Labuan Bajo juga merupakan ibu kota dari kecamatan
                Kecamatan Komodo dan ibu kota Kabupaten Manggarai Barat. Sedang diwacanakan pengembangan Kota Labuan
                Bajo</p>
            <a href="galerry.html" class="btn btn-primary tombol">Galeri</a>
        </div>
    </div>




</div>


<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>