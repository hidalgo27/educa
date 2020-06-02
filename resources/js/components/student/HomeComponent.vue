<template>
    <v-container>

        <v-row>
            <v-col md="4">
                <v-card
                >
                    <v-img
                        :src="auth.avatar_original"
                        :alt="auth.name"
                        height="300px"
                        dark
                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.3)"
                    >
                        <v-row class="fill-height">
                            <v-card-title class="d-block">

                                <v-btn dark icon class="mr-4" href="">
                                    <v-icon>mdi-pencil</v-icon>
                                </v-btn>

                            </v-card-title>

                            <v-spacer></v-spacer>

                            <v-card-title class="white--text text-center w-100 pt-12 w-100">
                                <div class="title pt-12 mx-auto">{{auth.name}}</div>
                            </v-card-title>
                        </v-row>
                    </v-img>

                    <v-list two-line>
                        <v-list-item @click="">
                            <v-list-item-icon>
                                <v-icon color="indigo">mdi-phone</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>(650) 555-1234</v-list-item-title>
                                <v-list-item-subtitle>Mobile</v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-icon>
                                <v-icon>mdi-message-text</v-icon>
                            </v-list-item-icon>
                        </v-list-item>

                        <v-list-item @click="">
                            <v-list-item-action></v-list-item-action>

                            <v-list-item-content>
                                <v-list-item-title>(323) 555-6789</v-list-item-title>
                                <v-list-item-subtitle>Work</v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-icon>
                                <v-icon>mdi-message-text</v-icon>
                            </v-list-item-icon>
                        </v-list-item>

                        <v-divider inset></v-divider>

                        <v-list-item @click="">
                            <v-list-item-icon>
                                <v-icon color="indigo">mdi-email</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>aliconnors@example.com</v-list-item-title>
                                <v-list-item-subtitle>Personal</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>

                        <v-list-item @click="">
                            <v-list-item-action></v-list-item-action>

                            <v-list-item-content>
                                <v-list-item-title>ali_connors@example.com</v-list-item-title>
                                <v-list-item-subtitle>Work</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>

                        <v-divider inset></v-divider>

                        <v-list-item @click="">
                            <v-list-item-icon>
                                <v-icon color="indigo">mdi-map-marker</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>1400 Main Street</v-list-item-title>
                                <v-list-item-subtitle>Orlando, FL 79938</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </v-card>
            </v-col>
            <v-col>

                <v-alert
                    icon="mdi-alert"
                    prominent
                    text
                    type="info"
                    class="mb-6"
                >
                    <v-row align="center">
                        <v-col class="grow">Inicie su camino de ingreso a la Univerdidad. <strong>s/.99 soles por mes</strong> o s./250 soles por los 3 meses.</v-col>
                        <v-col class="shrink">
                            <v-btn color="primary" dark>Comenzar ahora</v-btn>
                        </v-col>
                    </v-row>
                </v-alert>

                <div class="">
                    <v-alert
                        text
                        dense
                        color="teal"
                        class="pt-8"
                        border="left"
                    >
                        <h3 class="headline mb-3 font-weight-bold">Bienvenido a nuestra gran familia</h3>
                        <p>El grupo educativo Green le da la bienvenida y agradece su preferencia.</p>
                        <p>Escoja su objetivo y justos los lograremos.</p>

                        <v-row>
                            <v-col class="d-flex" cols="12" sm="4">
                                <v-select
                                    :items="items"
                                    label="Universidad"
                                    outlined
                                ></v-select>
                            </v-col>
                            <v-col class="d-flex" cols="12" sm="3">
                                <v-select
                                    :items="items"
                                    label="Modalidad"
                                    outlined
                                ></v-select>
                            </v-col>
                            <v-col class="d-flex" cols="12" sm="3">
                                <v-select
                                    :items="items"
                                    label="Grupo"
                                    outlined
                                ></v-select>
                            </v-col>
                            <v-col cols="12" sm="2">
                                <v-btn x-large color="green accent-4" class="w-100" dark>Guardar</v-btn>
                            </v-col>
                        </v-row>
                    </v-alert>


                </div>

                <div class="d-none">
                <h3 class="headline mb-3 font-weight-bold">Tus cursos</h3>
<!--                <p class="">Sus</p>-->

                <v-card tile flat class=" mb-3">

                    <v-row no-gutters align="center">
                        <v-col md="2" class="position-relative">
                            <v-img src="" aspect-ratio="2" contain></v-img>
                        </v-col>
                        <v-col class="px-3">
                            <h3 class="small font-weight-bold mb-2">Algebra</h3>
                            <v-progress-linear
                                value="90"
                                height="20"
                                color="green accent-4"
                                dark
                            >
                                <span class="caption">90%</span>
                            </v-progress-linear>
                            <p class="mt-2 font-weight-medium text--secondary caption">15/16Materiales</p>
                        </v-col>
                        <v-col md="4">
                            <v-btn class="w-100 text-capitalize" color="green accent-4" dark>Continuar viendo curso</v-btn>
                        </v-col>
                    </v-row>

                </v-card>

                <v-card tile flat class=" mb-3">

                    <v-row no-gutters align="center">
                        <v-col md="2" class="position-relative">
                            <v-img src="" aspect-ratio="2" contain></v-img>
                        </v-col>
                        <v-col class="px-3">
                            <h3 class="small font-weight-bold mb-2">Fisica</h3>
                            <v-progress-linear
                                value="50"
                                height="20"
                                color="amber"
                                dark
                            >
                                <span class="caption">50%</span>
                            </v-progress-linear>
                            <p class="mt-2 font-weight-medium text--secondary caption">15/16Materiales</p>
                        </v-col>
                        <v-col md="4">
                            <v-btn class="w-100 text-capitalize" color="green accent-4" dark>Continuar viendo curso</v-btn>
                        </v-col>
                    </v-row>

                </v-card>

                <v-card tile flat class=" mb-3">

                    <v-row no-gutters align="center">
                        <v-col md="2" class="position-relative">
                            <v-img src="" aspect-ratio="2" contain></v-img>
                        </v-col>
                        <v-col class="px-3">
                            <h3 class="small font-weight-bold mb-2">Geometria</h3>
                            <v-progress-linear
                                value="15"
                                height="20"
                                color="red"
                                dark
                            >
                                <span class="caption">15%</span>
                            </v-progress-linear>
                            <p class="mt-2 font-weight-medium text--secondary caption">15/16Materiales</p>
                        </v-col>
                        <v-col md="4">
                            <v-btn class="w-100 text-capitalize" color="green accent-4" dark>Continuar viendo curso</v-btn>
                        </v-col>
                    </v-row>

                </v-card>

                </div>
            </v-col>
        </v-row>

    </v-container>
</template>

<script>
    export default {
        props: ['auth'],
        name: "HomeComponent"
    }
</script>

<style scoped>

</style>
