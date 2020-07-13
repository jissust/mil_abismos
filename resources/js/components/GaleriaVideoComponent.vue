<template>
    <section id="videos">
        <div class="container">
            <video controls
                   v-for="(vid, ind) in video">
                <source :src="vid.ruta"/>
            </video>
        </div>
    </section>
</template>

<script>
    export default {
        name: "galeriavideo",
        data:function(){
            return {
                video:''
            }
        },
        created() {
            this.getVideo();
        },
        methods:{
            getVideo(){
                axios({method: 'GET', url: '/mostrarVideo'}).then(
                    result => {
                        this.video = result.data;
                    }
                )
            }
        }
    }
</script>

<style scoped>
    #videos{
        text-align: center;
        background-color: #111111;
        padding: 60px 0;
    }
    video{
        width: 100%;
    }
    @media (min-width: 992px) {
        video{
            max-width:600px;
        }
    }

</style>
