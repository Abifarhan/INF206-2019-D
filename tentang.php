<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Service</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            /* background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0. 6)), url(photo.jpg); */
            background: #000000;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color: orangered;
        }

        .service {
            margin: 90px auto;
            text-align: center;
        }

        h1 {
            font-family: sans-serif;
            letter-spacing: 1px;
        }

        h1:after {
            contain: '';
            background: blue;
            display: block;
            width: 150px;
            height: 3px;
            margin: 10px auto;
        }

        /* css untuk our team */
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .team-section {
            overflow: hidden;
            text-align: center;
            background: #34495e;
            padding: 60px;
        }

        .team-section {
            text-transform: uppercase;
            margin-bottom: 60px;
            color: white;
            font-size: 40px;
        }

        .border {
            display: block;
            margin: auto;
            width: 160px;
            height: 3px;
            background: #3498db;
            margin-bottom: 40px;
        }

        .ps {
            margin-bottom: 40px;
        }

        .ps a {
            display: inline-block;
            margin: 30px;
            width: 160px;
            height: 160px;
            overflow: hidden;
            border-radius: 50%;
        }

        .ps a img {
            width: 100%;
            filter: grayscale(100%);
            transition: 0.4s all;
        }

        .ps a:hover>img {
            filter: none;
        }

        .section {
            width: 600px;
            margin: auto;
            font-size: 20px;
            color: white;
            text-align: justify;
            height: 0;
            overflow: hidden;
        }

        .section:target {
            height: auto;

        }

        .name {
            display: block;
            margin-bottom: 30px;
            text-align: center;
            text-transform: uppercase;
            font-size: 22px;
        }

        .services h1 {
            color: burlywood;
        }
    </style>
</head>

<body>
    <!-- Our Service -->
    <div class="container text-center">
        <div class="services">
            <h1>MugOn</h1><br><br>
            <h3>Apa Itu MugOn?</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <p>MugOn adalah aplikasi jual beli ikan secara online yang bertujuan untuk membantu masyarakat yang ingin membeli ikan tanpa harus pergi ke pasar sehingga pembeli lebih dapat menghemat waktu</p>
        </div>
        <!-- <div class="col-md-3 text-center">
            <div class="icon">
                <i class="fa fa-dekstop" aria-hidden="true"></i>
            </div>
            <h3>Web Development</h3>
            <p>Ini untuk situs Mugon</p>
        </div>
        <div class="col-md-3 text-center">
            <div class="icon">
                <i class="fa fa-dekstop" aria-hidden="true"></i>
            </div>
            <h3>Web Development</h3>
            <p>Ini untuk situs Mugon</p>
        </div>
        <div class="col-md-3 text-center">
            <div class="icon">
                <i class="fa fa-dekstop" aria-hidden="true"></i>
            </div>
            <h3>Web Development</h3>
            <p>Ini untuk situs Mugon</p>
        </div> -->
    </div>
    <!-- Bagian akhir our service -->
    <!-- Bagian our team -->
    <div class="team-section text-center">
        <h1>Our Team</h1>
        <span class="border"></span>
        <div class="ps">
            <a href="#p1"><img src="img/pas foto.jpg" alt=""></a>
            <a href="#p2"><img src="img/khairul.jpeg" alt=""></a>
            <a href="#p3"><img src="img/raisya.jpeg" alt=""></a>
            <a href="#p4"><img src="img/2.jpg" alt=""></a>
        </div>

        <div class="section" id="p1">
            <span class="name">Abi Farhan</span>
            <span class="border"></span>
            <p>ini profil Abi Farhan</p>
        </div>

        <div class="section" id="p2">
            <span class="name">M.Khairul Ramadhan</span>
            <span class="border"></span>
            <p>ini profil Khairul</p>
        </div>

        <div class="section" id="p3">
            <span class="name">Raisya Husna</span>
            <span class="border"></span>
            <p>ini profil Raisya</p>
        </div>

        <div class="section" id="p4">
            <span class="name">Tedy Alfariansah</span>
            <span class="border"></span>
            <p>ini profil Tedy</p>
        </div>
    </div>
    <!-- Bagian akhir out team -->


</body>

</html>