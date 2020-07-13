<template>
    <section id="discografia"
             class="bloque">
        <div class="container">
            <div class="titulo">
                Discografía
            </div>
            <div class="row">
                <div v-for="(disco, index) in discografia"
                     class="col-sm-6" >
                    <img class="img-fluid shadow"
                         :src="disco.imagen">
                    <div class="discografia__nombre_disco p-3">
                        {{ disco.titulo }}
                    </div>
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
    #discografia {
        color: rgba(255, 255, 255, 0.75);
        background-attachment: fixed;
        background-position: bottom;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        text-align: center;
        background-color: #111111;
        z-index: 1;
    }
    .discografia__nombre_disco{
        background-color: RGB(0, 0, 0, 0.7);
        margin: 10px 0;
        color: #ffffff;
        font-size: 1rem;
        -webkit-box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75) !important;
        -moz-box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75) !important;
        box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75) !important;
    }
</style>
