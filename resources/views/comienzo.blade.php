<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1">
        <title>Mil Abismos</title>
        <meta name="description"
              content="" />
        <meta name="keywords"
              content="" />
        <!--<link rel="stylesheet" href="assets/css/main.css" />-->
        <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css"> -->
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
        <meta name="csrf-token"
              content="{{ csrf_token() }}">
        <link rel="stylesheet"
              href="{{asset('css/app.css')}}">
        <link rel="icon"
              type="image/x-icon"
              href="images/favicon.ico" />
        <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
              rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">

    </head>
<body>
    <div id="app">
        <nav-top></nav-top>
        <home></home>
        <redes></redes>
        <show></show>
        <discografia></discografia>
        <galeria></galeria>
        <galeriavideo></galeriavideo>
        <pie></pie>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js" ></script>
    <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script> -->
    <script src="assets/js/funciones.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    </body>
</html>
