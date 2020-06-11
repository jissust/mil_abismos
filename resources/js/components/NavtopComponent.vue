<template>
    <nav id="nuevoMenu"
         class="navbar fixed-top navbar-expand-lg navbar-dark py-4 navFondo">
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
            <i class="fa fa-bars colorFontWhite"></i>
        </button>
        <div id="navbarSupportedContent"
             class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="navbar-brand floatWidthCien"
                       href="#cta01">
                        Música
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand floatWidthCien"
                       href="#cta">
                        Show
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand floatWidthCien"
                       href="#cta02">
                        Discografía
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand floatWidthCien"
                       href="#galeria">
                        Galeria
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand floatWidthCien"
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
    .floatWidthCien{
        float:left;
        width: 100%;
    }
    button.boton-bar{
        box-shadow: none;
    }
    .colorFontWhite{
        color: #ffffff;
    }
    @media (max-width: 992px) {
        .navbar{
            background-color: #111111;
        }
    }
</style>
