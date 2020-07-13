<template>
    <section id="redes"
             class="bloque">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img v-for="item in escuchanos"
                         :src="item.imagen"
                         class="img-fluid shadow">
                </div>
                <div class="col-sm-6" >
                    <h1>
                        TÍTULO TÍTULO TÍTULO
                    </h1>
                    <div class="comentario">
                        Titulo tituloTitulo tituloTitulo tituloTitulo titulo
                        Titulo tituloTitulo tituloTitulo tituloTitulo titulo
                        Titulo tituloTitulo tituloTitulo tituloTitulo titulo
                        Titulo tituloTitulo tituloTitulo tituloTitulo titulo
                        Titulo tituloTitulo tituloTitulo tituloTitulo titulo
                        Titulo tituloTitulo tituloTitulo tituloTitulo titulo
                        Titulo tituloTitulo tituloTitulo tituloTitulo titulo
                        Titulo tituloTitulo tituloTitulo tituloTitulo titulo
                        Titulo tituloTitulo tituloTitulo tituloTitulo titulo
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
    #redes{
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
</style>
