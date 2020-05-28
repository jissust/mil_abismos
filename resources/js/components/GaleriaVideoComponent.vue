<template>
    <section class="" id="videos" class="floatWidthCien">
        <video width="100%" style="float: left;" controls v-for="(vid, ind) in video">
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
    .floatWidthCien{
        float:left;
        width: 100%;
    }
    video{
        width: 100%;
    }
</style>
