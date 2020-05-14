<template>
<div>
        <v-navigation-drawer
            v-model="drawer"
            app
        >
            <v-list dense>
                <v-list-item link>
                    <v-list-item-action>
                        <v-icon>mdi-home</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Home</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link>
                    <v-list-item-action>
                        <v-icon>mdi-contact-mail</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Contact</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar
            app
            color="grey darken-3"
            dark
            hide-on-scroll
            elevation="0.5"
        >
            <v-app-bar-nav-icon @click.stop="drawer = !drawer" class="hidden-md-and-up"/>
            <v-toolbar-title class="pl-0">
<!--                <span class="font-weight-bold ">EduLab</span>-->
                <a href="/">
                <v-img
                    :src="logo"
                    contain
                    width="110px"

                />
                </a>
            </v-toolbar-title>
            <v-layout class="align-center">
                <v-spacer />
                <v-btn

                    class="hidden-sm-and-down font-weight-medium text-capitalize"

                    text

                >
                    Cursos
                </v-btn>
                <v-btn

                    class="hidden-sm-and-down font-weight-medium text-capitalize"

                    text

                >
                    Universidades
                </v-btn>
                <v-btn

                    class="hidden-sm-and-down font-weight-medium text-capitalize"

                    text

                >
                    Planes
                </v-btn>
                <v-btn

                    class="hidden-sm-and-down font-weight-medium text-capitalize"

                    text
                >
                    Nosotros
                </v-btn>
                <v-divider
                    vertical
                    class="mx-5"
                ></v-divider>
                <v-btn
                    color="lime accent-4"
                    class="mr-4 grey--text text--darken-3"
                >
                    <span class="text-capitalize">Prueba gratis</span>
                </v-btn>
                <v-btn
                    color="lime accent-4"
                    outlined
                    dark
                    href="/login"
                >
                    <span class="text-capitalize">Iniciar sesión</span>
                </v-btn>
            </v-layout>

<!--            <v-text-field-->
<!--                append-icon="mdi-magnify"-->
<!--                -->
<!--                dense-->
<!--                hide-details-->
<!--                outlined-->
<!--                color="red"-->
<!--                style="max-width: 250px;"-->
<!--                class="ml-5"-->
<!--            />-->
        </v-app-bar>
</div>
</template>

<script>
    export default {
        props: ['logo'],
        data: () => ({
            drawer: false,
            alignments: [
                'start',
                'center',
                'end',
            ],
        })
    }
</script>
