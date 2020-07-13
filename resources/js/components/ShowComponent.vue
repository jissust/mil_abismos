<template>
    <section    id="show"
                class="bloque">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>
                        {{ show.titulo }}
                    </h1>
                    <div class="comentario">
                        {{ show.texto }}
                    </div>

                </div>

                <div class="col-sm-6" >
                    <img :src="show.ruta_imagen"
                         class="shadow img-fluid" >

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
    #show {
        background-color: #ffffff ;
        background-attachment: fixed;
        background-position: bottom;
        position: relative;
        text-align: center;
        z-index: 1;
    }
    #show h1{
        font-weight: bolder;
        font-size: 40px;
        letter-spacing: 4px;
    }
    #show .comentario{
        font-size: 16px;
        letter-spacing: 4px;
        margin-bottom: 60px;
    }
</style>
