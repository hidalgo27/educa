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
<!--                <v-btn-->

<!--                    class="hidden-sm-and-down font-weight-medium text-capitalize"-->

<!--                    text-->

<!--                >-->
<!--                    Cursos-->
<!--                </v-btn>-->
                <v-btn

                    class="hidden-sm-and-down font-weight-medium text-capitalize"

                    text
                >
                    Docentes
                </v-btn>
                <v-btn
                    class="hidden-sm-and-down font-weight-medium text-capitalize"
                    text
                    href="#universidades"
                >
                    Universidades
                </v-btn>
                <v-btn

                    class="hidden-sm-and-down font-weight-medium text-capitalize"
                    text
                    href="#precios"

                >
                    Precios
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

                <template v-if="auth === 0">
                    <v-btn
                        color="lime accent-4"
                        class="mr-4 grey--text text--darken-3 d-none d-sm-flex"
                        href="/register"
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
                </template>
                <template v-else>

                    <v-menu
                        v-model="menu"
                        :close-on-content-click="false"
                        :nudge-width="200"
                        offset-x
                    >
                        <template v-slot:activator="{ on }">
                            <v-btn

                                dark
                                text
                                v-on="on"
                                class="mr-4 lime--text text--accent-4"
                            >
                                <v-avatar left size="25">
                                    <img
                                        :src="auth.avatar_original"
                                        :alt="auth.name"
                                    >
                                </v-avatar>
                                <span class="text-capitalize">{{auth.name}}</span>
                            </v-btn>

                        </template>

                        <v-card>
                            <v-list>
                                <v-list-item>
                                    <v-list-item-avatar>
                                        <img :src="auth.avatar_original" :alt="auth.name">
                                    </v-list-item-avatar>

                                    <v-list-item-content>
                                        <v-list-item-title>{{auth.name}}</v-list-item-title>
                                        <v-list-item-subtitle>Cuenta Gratuita</v-list-item-subtitle>
                                    </v-list-item-content>

                                </v-list-item>
                            </v-list>

                            <v-divider></v-divider>

                            <v-list>
                                <v-list-item href="../student/home">
                                    <v-list-item-icon>
                                        <v-icon>mdi-home</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-title>Ver mi perfil</v-list-item-title>
                                </v-list-item>

                                <v-list-item href="#">
                                    <v-list-item-icon>
                                        <v-icon>mdi-home</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-title>Ver todos mis cursos</v-list-item-title>
                                </v-list-item>

                                <v-list-item href="../student/suscripcion">
                                    <v-list-item-icon>
                                        <v-icon>mdi-home</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-title>Mi Suscripción</v-list-item-title>
                                </v-list-item>

                            </v-list>

                            <v-card-actions>
                                <v-spacer></v-spacer>

                                <form id="logout-form" action="/logout" method="POST">
                                    <v-text-field
                                        type="hidden"
                                        name="_token"
                                        class="d-none"
                                        v-model="csrf"
                                    ></v-text-field>
                                    <v-btn
                                        color="lime accent-4"
                                        class="mr-4 grey--text text--darken-3"
                                        type="submit"
                                    >
                                        <span class="text-capitalize">Salir </span>
                                    </v-btn>
                                </form>

<!--                                <v-btn text @click="menu = false">Cancel</v-btn>-->
<!--                                <v-btn color="primary" text @click="menu = false">Save</v-btn>-->
                            </v-card-actions>
                        </v-card>
                    </v-menu>



                </template>
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
        props: ['logo', 'auth', 'csrf'],
        data: () => ({

            drawer: false,
            menu: false,
            alignments: [
                'start',
                'center',
                'end',
            ],

        })
    }
</script>
