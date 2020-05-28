<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mil Abismos</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav-top></nav-top>
            <home></home>
            <redes></redes>
            <show></show>
            <discografia></discografia>
        </div>
    <!--
    <section id="cta" class="wrapper" style="background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url();">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="" class="floatWidthCien" >
                </div>
                <div class="col-sm-6" >
                    <div class="floatWidthCien">
                        <h1>

                        </h1>
                        <h3 >

                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="" id="galeria">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li id="sl" data-target="#carouselExampleIndicators" data-slide-to="" ></li>
            </ol>
            <div class="carousel-inner">
                    <div id="caro" class="carousel-item">
                        <img src="" class="d-block w-100" alt="...">
                    </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="" id="videos" class="floatWidthCien">
        <video width="100%" style="float: left;" controls>
            <source src=""/>
        </video>
    </section>

    <footer id="footer" class="footer text-center" >
        <div class="footer-redes">
            <div class="floatWidthCien">
                <a href="" target="_blank"  >
                    <i class="" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="copyright floatWidthCien">
            &copy; 2019 by Jesús Tissera | <a href="mailto:jesustissera@gmail.com">jesustissera@gmail.com</a>
        </div>
    </footer>
    <div class="preloader"></div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js" ></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
    <script src="assets/js/funciones.js"></script>
    -->
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
