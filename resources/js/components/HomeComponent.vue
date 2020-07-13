<template>
    <section id="banner">
        <div id="textoFlotante">
            <img class="floatWidthCien"
                 style="width: 100%"
                 src="images/mil_abismos_logo.png"/>
        </div>
        <video class="img-responsive"
               autoplay
               loop
               muted
               playsinline
               :src="home.ruta"></video>
    </section>
</template>

<script>
    export default {
        name: "Home",
        data:function(){
            return {
                home:''
            }
        },
        created:function() {
            this.getHome();
        },
        methods:{
            getHome(){
                axios({method: 'GET', url: '/mostrarHome'}).then(
                    result => {
                        this.home = result.data;
                    }
                )
            }
        }
    }
</script>

<style scoped>
    #banner {
        -ms-flex-align: center;
        -ms-flex-pack: center;
        background-color: #111111;
        color: rgba(255, 255, 255, 0.5);
        -moz-align-items: center;
        -webkit-align-items: center;
        -ms-align-items: center;
        align-items: center;
        display: -moz-flex;
        display: -webkit-flex;
        display: -ms-flex;
        display: flex;
        -moz-justify-content: center;
        -webkit-justify-content: center;
        -ms-justify-content: center;
        justify-content: center;
        border-top: 0;
        display: -ms-flexbox;
        height: 100%;
        overflow: hidden;
        position: relative;
        text-align: center;
        width: 100%;
    }
    #banner:after {
        background: linear-gradient(135deg, #ce1b28 0%, #111111 74%);
        content: ' ';
        display: block;
        height: 100%;
        left: 0;
        opacity: 0.6;
        position: absolute;
        top: 0;
        webkit-linear-gradientidth: 100%;
        width: 100%;
        z-index: 1;
    }
    div#textoFlotante{
        position: absolute;
        z-index: 1000;
        padding: 100px;
    }
    .floatWidthCien{
        float:left;
        width: 100%;
    }
    video{
        width: 100%;
    }
    @media (max-width: 992px) {
        #banner{
            margin-top: 83px;
        }
    }

</style>
