<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mil Abismos</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <nav id="nuevoMenu" class="navbar fixed-top navbar-expand-lg navbar-dark py-4 navFondo">
        <a class="navbar-brand" href="#">
            <img src="images/mil_abismos_logo.png" class="posicionLogoNav" />
        </a>
        <button class="boton-bar navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars colorFontWhite"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="navbar-brand floatWidthCien" href="#cta01">Música</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand floatWidthCien" href="#cta">Show</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand floatWidthCien"  href="#cta02">Discografía</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand floatWidthCien" href="#galeria">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand floatWidthCien" href="#videos">Videos</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Banner -->
    <section id="banner" >
        <div id="textoFlotante">
            <img class="floatWidthCien" style="width: 100%" src="images/mil_abismos_logo.png"/>
        </div>
        @foreach( $home as $homes)
            <video class="img-responsive" autoplay loop muted playsinline src="{{$homes->ruta}}"></video>
        @endforeach
    </section>
    <!-- Highlights -->
    <section id="cta01" class="wrapper"  style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(206, 27, 40, 0.25)), url({{ $fondos[0]["ruta"] }});">
        <div class="container">
            @foreach( $escuchanos as $escuchar )
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{$escuchar->imagen}}" class="floatWidthCien">
                </div>
                <div class="col-sm-6" >
                    <div class="floatWidthCien">
                        <h1 class="titulo">
                            {{$escuchar->texto}}
                        </h1>
                        @foreach( $redes as $red )
                            <div class="renglonRedes">
                                <a target="_blank" href="{{$red->direccion}}">
                                    <img src="{{$red->ruta}}" >
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- CTA -->
    <section id="cta" class="wrapper" style="background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url({{ $fondos[1]["ruta"] }});">
        <div class="container">
            @foreach( $show as $sh )
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{$sh->ruta_imagen}}" class="floatWidthCien" >
                </div>
                <div class="col-sm-6" >
                    <div class="floatWidthCien">
                        <h1>
                            {{$sh->titulo}}
                        </h1>
                        <h3 >
                            {{$sh->texto}}
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section id="cta02" class="wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(206, 27, 40, 0.25)), url({{ $fondos[2]["ruta"] }});">
        <div class="container">
            <h1 class="titulo">Discografía</h1>
            <div class="row">
                @foreach( $discografia as $disc )
                    <div class="col-sm-6" >
                        <img class="floatWidthCien" src="{{$disc->imagen}}">
                        <h4 class="colorFontWhite floatWidthCien p-3">
                            {{$disc->titulo}}
                        </h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="" id="galeria">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach( $galeria as $i => $gale  )
                    <li id="sl{{ $i }}" data-target="#carouselExampleIndicators" data-slide-to="{{ $gale->id }}" ></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach( $galeria as $i => $gale )
                    <div id="caro{{ $i }}" class="carousel-item">
                        <img src="{{$gale->imagen}}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
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
        @foreach( $videos as $i => $video)
        <video width="100%" style="float: left;" controls>
            <source src="{{ $video->ruta  }}"/>
        </video>
        @endforeach
    </section>
    <!-- Footer -->
    <footer id="footer" class="footer text-center" >
        <div class="footer-redes">
            <div class="floatWidthCien">
            @foreach( $redes as $red )
                <a href="{{$red->direccion}}" target="_blank"  >
                    <i class="{{$red->icono}}" aria-hidden="true"></i>
                </a>
            @endforeach
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
    </body>
</html>
