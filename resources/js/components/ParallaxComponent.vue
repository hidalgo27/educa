<template>
    <div>
        <v-parallax
            dark
            src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg"
        >
            <v-row
                align="center"
                justify="start"
            >
                <v-col class="text-center" md="7" offset-md="1">
                    <h1 class="display-1 font-weight-bold mb-4">La escuela online de formación profesional en tecnología</h1>
                    <h4 class="subheading">Build your application today!</h4>
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
