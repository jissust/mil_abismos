<template>
    <nav id="nuevoMenu"
         class="navbar fixed-top navbar-expand-md navbar-dark bg-dark py-3">
        <a class="navbar-brand"
           href="#">
            <img src="images/mil_abismos_logo.png"
                 class="posicionLogoNav" />
        </a>
        <button class="boton-bar navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div id="navbarSupportedContent"
             class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="navbar-brand w-100"
                       href="#redes">
                        Redes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand w-100"
                       href="#show">
                        Show
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand w-100"
                       href="#discografia">
                        Discografía
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand w-100"
                       href="#galeria">
                        Galeria
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand w-100"
                       href="#videos">
                        Videos
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "nav-top",
        data:function(){
            return {
            }
        },
        created() {

        },
    }
</script>

<style>
    .posicionLogoNav{
        float:left;
        width: 80px;
    }
</style>
