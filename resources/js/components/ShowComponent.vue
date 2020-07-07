<template>
    <section    id="show"
                class="bloque"
                :style="{'background-image': `linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(${fondo.ruta})`}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img :src="show.ruta_imagen"
                         class="shadow img-fluid" >
                </div>
                <div class="col-sm-6" >
                    <h1>
                        {{ show.titulo }}
                    </h1>
                    <h3 >
                        {{ show.texto }}
                    </h3>
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
    h1, h3{
        padding: 10px;
    }
    #show {
        background-color: #ce1b28;
        color: rgba(255, 255, 255, 0.75);
        background-attachment: fixed;
        background-position: bottom;
        position: relative;
        text-align: center;
        z-index: 1;
    }
</style>
