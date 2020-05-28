<template>
    <section id="cta02"
             class="wrapper"
             :style="{'background-image': `linear-gradient(rgba(0, 0, 0, 0.25), rgba(206, 27, 40, 0.25)), url(${fondo.ruta})`}">

        <div class="container">
            <h1 class="titulo">Discografía</h1>
            <div class="row">
                <div v-for="(disco, index) in discografia" class="col-sm-6" >
                    <img class="floatWidthCien" :src="disco.imagen">
                    <h4 class="colorFontWhite floatWidthCien p-3">
                        {{ disco.titulo }}
                    </h4>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "discografia",
        data:function(){
            return {
                discografia:"",
                fondo:""
            }
        },
        created() {
            this.getDiscografia();
            this.getFondo();
        },
        methods:{
            getDiscografia(){
                axios({method: 'GET', url: '/mostrarDiscografia'}).then(
                    result => {
                        this.discografia = result.data;
                    }
                )
            },
            getFondo(){
                axios({method: 'GET', url: '/mostrarFondo/discografia'}).then(
                    result => {
                        this.fondo = result.data;
                    }
                )
            }
        }
    }
</script>

<style >
    #cta02 {
        background-color: #ce1b28;
        color: rgba(255, 255, 255, 0.75);
        background-attachment: fixed;
        /*background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(206, 27, 40, 0.25)), url(../../images/cta02.jpg);*/
        background-position: bottom;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        text-align: center;
        z-index: 1;
    }
    .titulo{
        text-align:center;
        color:#ffffff;
    }
</style>
