<template>
    <section id="galeria_imagenes">
        <div class="container">
            <div id="carouselExampleIndicators"
                 class="carousel slide carousel-fade"
                 data-ride="carousel">
                <!--<ol class="carousel-indicators">
                    <li v-for="(gale, index) in galeria"
                        :id="'sl'+index"
                        data-target="#carouselExampleIndicators"
                        :data-slide-to="index" >

                    </li>
                </ol>-->
                <div class="carousel-inner">
                    <div v-for="(gale, index) in galeria"
                         :id="'caro'+index"
                         class="carousel-item"
                        v-bind:class="{'active': gale.active }">
                        <img :src="gale.imagen"
                             class="d-block w-100"
                             alt="">
                    </div>
                </div>
                <a class="carousel-control-prev"
                   href="#carouselExampleIndicators"
                   role="button"
                   data-slide="prev">
                    <span class="carousel-control-prev-icon"
                          aria-hidden="true">
                    </span>
                    <span class="sr-only">
                        Previous
                    </span>
                </a>
                <a class="carousel-control-next"
                   href="#carouselExampleIndicators"
                   role="button"
                   data-slide="next">
                    <span class="carousel-control-next-icon"
                          aria-hidden="true">
                    </span>
                    <span class="sr-only">
                        Next
                    </span>
                </a>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "galeria",
        data:function(){
            return{
                galeria:"",
            }
        },
        created() {
            this.getGaleria();
        },
        methods:{
            getGaleria(){
                axios({method: 'GET', url: '/mostrarGaleria'}).then(
                    result => {
                        this.galeria = result.data;
                    }
                )
            }
        }
    }
</script>

<style scoped>
    #galeria_imagenes{
        padding: 60px 0;
    }
    #carouselExampleIndicators{
        max-width: 700px;
        margin:0 auto;
    }
</style>
