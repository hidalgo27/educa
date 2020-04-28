<template>
    <div>
        <v-parallax
            dark
            :src="'images/cover-edu3.jpg'"
            height="650"
        >
            <v-row
                align="center"
                justify="end"
            >
                <v-col class="text-center" md="5" offset-md="1">
                    <h1 class="display-1 font-weight-bold mb-4">La academia online de educación para tu ingreso a la universidad</h1>
<!--                    <h4 class="subheading">Build your application today!</h4>-->
                </v-col>
            </v-row>
        </v-parallax>

    </div>
</template>

<script>
    export default {
        name: "ParallaxComponent"
    }
</script>

<style>

</style>
