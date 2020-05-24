<template>
    <section>
        <v-parallax
            dark
            src="https://static.platzi.com/static/organizations/v2/images/profile/cover.7540b13e6f4c.jpg"
            height="250"
        >
            <!--            <v-breadcrumbs :items="items">-->
            <!--                <template v-slot:divider>-->
            <!--                    <v-icon>mdi-chevron-right</v-icon>-->
            <!--                </template>-->
            <!--            </v-breadcrumbs>-->

            <v-row
                align="center"
            >
                <v-col md="2">
                    <v-img :src="'../images/iconos/web/circle/avanzado.png'" aspect-ratio="1.7" contain></v-img>
                </v-col>
                <v-col md="7">
                    <h1 class="display-1 font-weight-bold mb-4">Jhon Doe</h1>
                    <h4 class="subheading">Plan Basic</h4>
                </v-col>
                <v-col md="3">
                    <v-btn color="lime accent-4" class="text-capitalize">Historial de pagos</v-btn>
                </v-col>
            </v-row>
        </v-parallax>

        <v-container>
            <v-row align="center">
                <v-col>
                    <p class="mb-0">Tu suscripción se renovará automáticamente el <strong>17 de junio de 2020</strong></p>
                </v-col>
                <v-col class="text-right">
                    <span class="display-1 font-weight-bold">s/.16.99</span>
                </v-col>
            </v-row>

            <v-row>
                <v-col>
                    <h3 class="headline mb-3 font-weight-bold">Administrar suscripción</h3>
                    <h3 class="headline mb-3 font-weight-bold">Medio de pago</h3>
                </v-col>
            </v-row>
        </v-container>
    </section>
</template>

<script>
    export default {
        name: "SuscripcionComponent"
    }
</script>

<style scoped>

</style>
