<template>
    <section    id="show"
                class="bloque"
                :style="{'background-image': `linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(${fondo.ruta})`}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img :src="show.ruta_imagen"
                         class="floatWidthCien shadow" >
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
    h1, h3{
        padding: 10px;
    }
    .floatWidthCien{
        float:left;
        width: 100%;
    }
    .bloque {
        padding: 8rem  0;
        position: relative;
        z-index: 1;
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
