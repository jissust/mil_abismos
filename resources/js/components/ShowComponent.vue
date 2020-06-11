<template>
    <section    id="show"
                class="wrapper"
                :style="{'background-image': `linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(${fondo.ruta})`}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img :src="show.ruta_imagen"
                         class="floatWidthCien" >
                </div>
                <div class="col-sm-6" >
                    <div class="floatWidthCien">
                        <h1>
                            {{ show.titulo }}
                        </h1>
                        <h3 >
                            {{ show.texto }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "show",
        data:function(){
            return {
                show:'',
                fondo:''
            }
        },
        created() {
            this.getShow();
            this.getFondo();
        },
        methods:{
            getShow(){
                axios({method: 'GET', url: '/mostrarShow'}).then(
                    result => {
                        this.show = result.data;
                    }
                )
            },
            getFondo(){
                axios({method: 'GET', url: '/mostrarFondo/show'}).then(
                    result => {
                        this.fondo = result.data;
                    }
                )
            }
        }
    }
</script>

<style>
    .floatWidthCien{
        float:left;
        width: 100%;
    }
    /* Wrapper */
    .wrapper {
        padding: 8rem 0 6rem 0 ;
        position: relative;
        z-index: 1; }
    @media screen and (max-width: 1280px) {
        .wrapper {
            padding: 4rem 0 2rem 0 ; } }
    @media screen and (max-width: 736px) {
        .wrapper {
            padding: 3rem 0 1rem 0 ; } }
    @media screen and (max-width: 480px) {
        .wrapper {
            padding: 2rem 0 0.1rem 0 ; } }
    #show {
        background-color: #ce1b28;
    color: rgba(255, 255, 255, 0.75);
        background-attachment: fixed;
        /*background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(../../images/show01.png);*/
        background-position: bottom;
        /*background-repeat: no-repeat;
        background-size: cover;*/
        position: relative;
        text-align: center;
        z-index: 1; }

</style>
