<template>
    <div class="parallax-box-h position-relative">
        <v-parallax
            dark
            src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/pizarra.jpg"
            height="650"
        >
            <v-row
                align="center"
                justify="center"
            >
                <v-col class="text-center" md="8">
                    <h1 class="display-2 font-weight-medium mb-4 d-none d-sm-flex">La academia online de educación para tu ingreso a la universidad</h1>
                    <h1 class="display-1 font-weight-medium mb-4 d-flex d-sm-none">La academia online de educación para tu ingreso a la universidad</h1>
                    <p class="title grey--text text--lighten-1 my-10">¡Aprovecha nuetros descuentos y arma tu plan a la medida!</p>
                    <v-btn color="lime accent-4" class="mb-5 font-weight-bold mr-5 grey--text text--darken-3" large dark href="/register">Comienza Ahora</v-btn>
                    <v-btn color="lime accent-4" class="mb-5 font-weight-bold" large outlined dark href="/register">Toma tu primera clase</v-btn>
<!--                    <h4 class="subheading">Build your application today!</h4>-->
                </v-col>
            </v-row>
            <div class="landing-banner__footer"></div>
        </v-parallax>
    </div>
</template>

<script>
    export default {
        name: "ParallaxComponent"
    }
</script>

<style>
    .landing-banner__footer {
        width: 100%;
        height: 0;
        border-left: 1440px solid #fff;
        border-bottom: 100px solid transparent;
        transform: scale(-1, -1);
        position: relative;
        /*top: -100px;*/
    }
    .parallax-box-h{
        height: 650px;
    }

    .v-parallax__content{
        padding: 0 !important;
    }
</style>
