<template>
    <section id="videos"
             class="floatWidthCien">
        <video controls
               v-for="(vid, ind) in video">
            <source :src="vid.ruta"/>
        </video>
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
    video{
        float:left;
        width: 100%;
    }
</style>
