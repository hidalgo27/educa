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
            color="indigo"
            dark
        >
            <v-app-bar-nav-icon @click.stop="drawer = !drawer" class="hidden-md-and-up"/>
            <v-toolbar-title>
                <v-img
                    src="https://static.platzi.com/mf-landings/image/isotipoPlatzi-442ccc1186a9806e18c9889cc301ffe1.png"
                    class="mr-5"
                    contain
                    height="48"
                    width="48"
                    max-width="48"
                />
            </v-toolbar-title>
            <v-layout class="align-center">
                <v-spacer />
                <v-btn

                    class="hidden-sm-and-down font-weight-bold"
                    flat
                    text
                    small
                >
                    hola1
                </v-btn>
                <v-btn

                    class="hidden-sm-and-down font-weight-bold"
                    flat
                    text
                    small
                >
                    hola
                </v-btn>
                <v-divider
                    vertical
                    class="mx-5"
                ></v-divider>
                <v-btn
                    color="teal"
                    small
                >
                    Iniciar sesión
                </v-btn>
            </v-layout>
            <v-text-field
                append-icon="mdi-magnify"
                flat
                dense
                hide-details
                solo-inverted
                style="max-width: 300px;"
                class="ml-5"
            />
        </v-app-bar>
</div>
</template>

<script>
    export default {
        props: {
            source: String,
        },
        data: () => ({
            drawer: false,
            alignments: [
                'start',
                'center',
                'end',
            ],
        }),
    }
</script>
