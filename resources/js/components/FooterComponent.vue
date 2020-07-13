<template>
    <footer id="footer"
            class="footer text-center" >
        <div class="footer-redes">
            <ul>
                <li v-for="red in redes">
                    <a :href="red.direccion" target="_blank">
                        <i :class="red.icono" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="copyright">
            &copy; 2019 by Jesús Tissera | <a href="mailto:jesustissera@gmail.com">jesustissera@gmail.com</a>
        </div>
    </footer>
</template>

<script>
    export default {
        name: "pie",
        data:function(){
            return {
                redes:""
            }
        },
        created() {
            this.getRedes();
        },
        methods:{
            getRedes(){
                axios({method: 'GET', url: '/mostrarRedes'}).then(
                    result => {
                        this.redes = result.data;
                    }
                )
            },
        }
    }
</script>

<style scoped>
footer{
    background-color: #000000 !important;
    color: #ffffff;
    float: left;
    width: 100%;
    padding: 20px;

}
#footer ul{
    list-style: none;
    margin: 0;
    padding: 0;
    display: inline-flex;
}
#footer a{
    color: #ffffff;
}
#footer ul li{
    padding: 0 20px;
}
#footer ul li i{
    font-size: 20px;
}
.footer-redes{
    margin-bottom: 20px;
}
.copyright{
    margin-bottom: 40px;
}

</style>
