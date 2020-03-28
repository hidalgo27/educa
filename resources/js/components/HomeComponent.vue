<template>
    <v-app>
        <nav-component></nav-component>
        <v-content>
            <parallax-component></parallax-component>

            <v-container
                class="fill-height"
                fluid
            >
                <v-row
                    align="center"
                    no-gutters
                    background="red"
                    justify="center"
                    class="bg-danger"
                >
                    <v-col
                        v-for="n in 3"
                        :key="n"
                    >
                        <v-card
                            class="pa-2"
                            outlined
                            tile
                        >
                            One of three columns
                        </v-card>
                    </v-col>
                </v-row>


            </v-container>

        </v-content>

        <v-footer
            color="indigo"
            app
        >
            <span class="white--text">&copy; 2019</span>
        </v-footer>

    </v-app>
</template>

<script>
    export default {
        name: "HomeComponent"
    }
</script>

<style>

</style>
