<template>
    <section id="redes"
             class="bloque"
             :style="{'background-image': `linear-gradient(rgba(0, 0, 0, 0.25), rgba(206, 27, 40, 0.25)), url(${fondo.ruta})`}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img v-for="item in escuchanos"
                         :src="item.imagen"
                         class="floatWidthCien shadow">
                </div>
                <div class="col-sm-6" >
                    <div class="floatWidthCien">
                        <h1 class="titulo">
                        </h1>
                        <div class="renglonRedes" v-for="(red, index) in redes">
                            <a target="_blank"
                               :href="red.direccion">
                                <img :src="red.ruta" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "redes",
        data:function(){
            return {
                escuchanos:"",
                redes:"",
                fondo:""
            }
        },
        created() {
            this.getEscuchanos();
            this.getRedes();
            this.getFondo();
        },
        methods:{
            getEscuchanos(){
                axios({method: 'GET', url: '/mostrarEscuchanos'}).then(
                    result => {
                        this.escuchanos = result.data;
                    }
                )
            },
            getRedes(){
                axios({method: 'GET', url: '/mostrarRedes'}).then(
                    result => {
                        this.redes = result.data;
                    }
                )
            },
            getFondo(){
                axios({method: 'GET', url: '/mostrarFondo/escuchanos'}).then(
                    result => {
                        console.log(result.data);
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
    .renglonRedes{
        float:left;
        width: 100%;
        text-align: center;
        padding:10px;
    }
    .renglonRedes a img{
        width: 200px;
    }
    #redes{
        background-color: #ce1b28;
        color: rgba(255, 255, 255, 0.75);
        background-attachment: fixed;
        background-position: bottom;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        text-align: center;
        z-index: 1;
    }
    #redes:before{
        padding: 100px;
    }
    .bloque {
        padding: 8rem  0;
        position: relative;
        z-index: 1;
    }
    .shadow{
        -webkit-box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75) !important;
        -moz-box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75) !important;
        box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75) !important;
    }
    @media (max-width: 992px) {
        .bloque{
            padding: 4rem  0;
        }
    }

</style>
